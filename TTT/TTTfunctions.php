
<?php
# Determines if a square should be empty, X or O

# $num represents a square on the board, it will equal 0,1 or
#2. It comes from $grid

# Returns what mark, if any, to place in a square

  function whatMark ($num) {
    switch ($num) {
      case 1:
        return "X";
        break;
      case 2:
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
    return $grid[$square] == 0 && !isset($winner);
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
    
      if($grid[9] == "1"){ $grid[9] = "2";}
      elseif($grid[9]=="2"){$grid[9] ="1";}
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
      if ($way_to_win == 111) {
        return "X Wins!!";
      }
      elseif($way_to_win == 222){
        return "O Wins!!";
      }
    }
    if(strpos($grid,"0")===false){
      return "It's a draw!!";
    }
  }

# Keeps track of how many wins each player has and how many draws

# grid is a 9-digit string that represents each square on the
# board(0=empty, 1= x, 2= O).

# returns

function trackResults($grid){
    if (empty($_SESSION)){
      $_SESSION["Xwins"] = 0;
      $_SESSION["Owins"] = 0;
      $_SESSION["draws"] = 0;
    }

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

  function compMove($grid, $winner,$player){
      $square = (string)rand(0,8);
      while($grid[$square] != "0"){
        $square = (string)rand(0,8);
      }
      

      $newGrid = substr_replace($grid, $player, $square, 1);
      return $newGrid;

  }
?>