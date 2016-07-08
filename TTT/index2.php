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
<body class = TTTcontent>

<?php
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

<div class="grid">
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
  
?></div>

<?php
  
  if ($winner) {
    fwrite($file_connection_s, $grid."\n");
    echo <<<HTML
      <div class="winner">$winner</div>
HTML;
  print_r($_SESSION);
  }
?>

  <a href="index2.php?playAgain=true" class="reset">Play Again!</a>
  <a href="index2.php?reset=true" class="reset"> Reset</a>

 
     <div class ="results__item"> <?php echo "X-Wins:  ", $results[0]; ?> </div> 
     <div class= "results__item"> <?php echo "O-Wins:  ", $results[1]; ?> </div>
     <div class = "results__item"> <?php echo "Draws:  ", $results[2]; ?> </div>

<?php
      fclose($file_connection_c);
      fclose($file_connection_s);
      pastGames($storage);
 ?>


</body>
</html>