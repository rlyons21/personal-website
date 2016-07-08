
<?php
# Determines if a square should be empty, X or O

# $chr represents a square on the board, it will equal -,X or
# O. It comes from $grid

# Returns what mark, if any, to place in a square

function whatMark ($chr) {
    switch ($chr) {
      case "X":
        return "X";
        break;
      case "O":
        return "O";
        break;
      default:
        return "";
        break;
    }
}

# Determine if a player can mark a given square

# $grid is a 9-digit string that represents each square on the 
#board. $square is a number 0-8 that represents a square.
#$winner a varriable that is not set until X or O wins (it
#will be either X or O).

# returns true if a player can mark the square, returns false
#if they cant
function isItEmpty($grid, $square, $winner) {
    return $grid[$square] == "-" && !isset($winner);
}

# Prints each square of the grid and switches players

#$grid is a 9-digit string that represents each square on the
#board(0=empty, 1= x, 2= O). $square is a number 0-8 that
#represents a square. $player represents whos turn it is
#$winner a varriable that is not set until X or O wins

#Creates a square with its contents using HTML

function printSquare($grid, $square, $player, $winner) {
    $mark = whatMark($grid[$square]);

    if (isItEmpty($grid, $square, $winner)) {
      $newGrid = substr_replace($grid, $player, $square, 1);

      echo <<<HTML
        <a class="square" href="?grid=$newGrid">$mark</a>
HTML;
    } else {
      echo <<<HTML
        <div class="square">$mark</div>   
HTML;
    }
}


#prints the entire grid

#$grid is a 9-digit string that represents each square on the
#board(0=empty, 1= x, 2= O). $player represents whos turn it is
#$winner a varriable that is not set until X or O wins

##Creates the grid with all of the squares using HTML

function printGrid($grid, $player, $winner) {
    for ($i = 0; $i < 9; $i++) {
      printSquare($grid, $i, $player, $winner);
    }
}


# Checks for a winner or draw

# grid is a 9-digit string that represents each square on the
# board(0=empty, 1= x, 2= O).

# Returns "its a draw!!", "x wins!!", "o wins!!", or nothing 
# to $winner.
function checkWinner($grid) {
    $wins = [];

    $wins[0] = $grid[0] . $grid[1] . $grid[2];
    $wins[1] = $grid[3] . $grid[4] . $grid[5];
    $wins[2] = $grid[6] . $grid[7] . $grid[8];
    $wins[3] = $grid[0] . $grid[3] . $grid[6];
    $wins[4] = $grid[1] . $grid[4] . $grid[7];
    $wins[5] = $grid[2] . $grid[5] . $grid[8];
    $wins[6] = $grid[0] . $grid[4] . $grid[8];
    $wins[7] = $grid[2] . $grid[4] . $grid[6];

    foreach ($wins as $way_to_win) {
      if ($way_to_win == "XXX") {
        return "X Wins!!";
      }
      elseif($way_to_win == "OOO"){
        return "O Wins!!";
      }
    }
    if(strpos($grid,"-")===false){
      return "It's a draw!!";
    }
}


# Keeps track of how many wins each player has and how many draws

# grid is a 9-digit string that represents each square on the
# board(0=empty, 1= x, 2= O). $records is an array that holds the session values

# returns an array holding the session values of Xwins, Owins and draws

function trackResults($grid, $records){

    if (checkWinner($grid) == "X Wins!!"){
      $_SESSION["Xwins"] += 1;
    }
    elseif (checkWinner($grid) == "O Wins!!"){
      $_SESSION["Owins"] += 1;
    }
    elseif (checkWinner($grid) == "It's a draw!!"){
      $_SESSION["draws"] += 1;
    } 

    return array($_SESSION["Xwins"], $_SESSION["Owins"], $_SESSION["draws"]);
}



# Randomly chooses an available square for the computer to mark

#$grid is a 9-digit string that represents each square on the
#board(0=empty, 1= x, 2= O). $player represents whos turn it is
#$winner a varriable that is not set until X or O wins 

# returns the updated grid that includes the computers move
function compMove($grid, $winner,$player){
      $moves = [];
      for($i = 0; $i < 9; $i++){
        if($grid[$i] == "-"){
          array_push($moves,$i);
        }
      }

      foreach($moves as $move){
        $try = $grid;
        $try[$move] = "O";
        if(checkWinner($try)== "O Wins!!"){
          return $try;
        }
        $try[$move] ="X";
        if(checkWinner($try) == "X Wins!!"){
          $try[$move] = "O";
          return $try;
        }
      }
      $square = array_rand($moves);
      
      $newGrid = substr_replace($grid, $player, $square, 1);
      return $newGrid;

}

# echos a link for each finished game so user can view if they please

# $file is the TTTstorage.txt file which contains the history of finished games 
#since the last time the user clicked reset

# doesn't return anything
function PastGames($file){
  $lines = count(file($file));
  for($i=1;$i<=$lines; $i++){ 
  echo <<<HTML
        <a href="load_game.php?game_number=$i">Game $i</a>
HTML;
  }
}
?>