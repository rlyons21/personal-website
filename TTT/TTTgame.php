<?php session_id("TTT"); ?>
<?php session_start(); ?>
<?php $pageName = "index2.php" ?>
<?php include 'TTTfunctions.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tic Tac Toe</title>
  <link rel="stylesheet" href="TTTstylesheet.css">
</head>
<body>

  <div class="header">
    <a class="header" href="/index.php">
      <div class="arrow_t"></div>
      <div class="arrow_s"></div>
    </a>

    <p class="header_text">Home</p>
  </div>

  <div class ="TTTcontent">

<?php

  if($_GET["playerCount"]){
    $_SESSION["player"] = "X";
    $_SESSION["playerCount"] = $_GET["playerCount"];
  }

  if($_GET["playAgain"] == "true"){
    $_SESSION["player"] = "X";
  }
  if($_GET["reset"]){
    $_SESSION = null;
    file_put_contents("TTTstorage.txt","");
  }
  if (empty($_SESSION)){
      $_SESSION["Xwins"] = 0;
      $_SESSION["Owins"] = 0;
      $_SESSION["draws"] = 0;
      $_SESSION["player"] = "X";
    }
  parse_str($_SERVER['QUERY_STRING'], $query);
  $grid = isset($query['grid']) ? $query['grid'] : "---------";
  $winner = checkWinner($grid);
  $results = trackResults($grid, $_SESSION);
  
  $current = "TTTcurrent.txt";
  $storage = "TTTstorage.txt";
  $file_connection_current = fopen($current, "w") or die("Error opening file");
  $file_connection_s = fopen($storage, "a") or die("Error opening file"); ?>



<?php if($_SESSION["playerCount"] == "One"){ ?>
            <div class="grid-1p">
                  <?php 
                  if($_SESSION["player"] == "O") {
                    if(isset($winner) == true){
                      printGrid($grid,$_SESSION["player"],$winner);
                    }else {
                     $grid = compMove($grid,$winner, $_SESSION["player"]);
                     $_SESSION["player"] = "X";
                     $winner = checkWinner($grid);
                     $results= trackResults($grid, $_SESSION);
                     fwrite($file_connection_current, $grid,"\n");
                   }
                  } 
                  if($_SESSION["player"] == "X"){
                     printGrid($grid, $_SESSION["player"], $winner);
                     fwrite($file_connection_current, $grid);
                     $_SESSION["player"] = "O";
                   }
                    
                  ?>
              
            </div>
<?php } ?>

  <?php if($_SESSION["playerCount"] == "Two"){ ?>
            <div class="grid-2p">
                <?php  printGrid($grid, $_SESSION["player"], $winner); ?>


            </div>
  <?php } ?>
<?php
  
  if ($winner) {
    fwrite($file_connection_s, $grid."\n");
    echo <<<HTML
      <div class="winner">$winner</div>
HTML;
  }
?>

  <a href="TTTgame.php?playAgain=true" class="reset">Play Again!</a>
  <a href="TTTgame.php?reset=true" class="reset"> Reset</a>

 
     <div class ="results__item"> <?php echo "X-Wins:  ", $results[0]; ?> </div> 
     <div class= "results__item"> <?php echo "O-Wins:  ", $results[1]; ?> </div>
     <div class = "results__item"> <?php echo "Draws:  ", $results[2]; ?> </div>

<?php
      fclose($file_connection_c);
      fclose($file_connection_s);
      pastGames($storage);
 ?>

  </div>


</body>
</html>
