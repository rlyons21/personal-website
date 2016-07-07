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


<div class="grid">
<?php
  if($_GET["reset"]){
    $_SESSION = null;
  }

  if (empty($_SESSION)){
      $_SESSION["Xwins"] = 0;
      $_SESSION["Owins"] = 0;
      $_SESSION["draws"] = 0;
    }

  parse_str($_SERVER['QUERY_STRING'], $query);
  $grid = isset($query['grid']) ? $query['grid'] : "---------X";
  $player = $grid[9];
  $winner = checkWinner($grid);
  $results = trackResults($grid, $_SESSION);
  
  $current = "TTTcurrent.txt";
  $storage = "TTTstorage.txt";
  $file_connection_current = fopen($current, "w") or die("Error opening file");
  $file_connection_s = fopen($storage, "a") or die("Error opening file");





if($player == "O") {
  if(isset($winner) == true){
    printGrid($grid,$player,$winner);
  }else {
   $grid = compMove($grid,$winner, $player);
   $player = "X";
   $winner = checkWinner($grid);
   $results= trackResults($grid, $_SESSION);
   fwrite($file_connection_current, substr($grid,0,9),"\n");
 }
} 

if($player == "X"){
   printGrid($grid, $player, $winner);
   fwrite($file_connection_current, substr($grid,0,9));
 }
  
?></div>

<?php
  
  if ($winner) {
    fwrite($file_connection_s, substr($grid,0,9)."\n");
    echo <<<HTML
      <div class="winner">$winner</div>
HTML;
  }
?>

  <a href="index2.php" class="reset">Play Again!</a>
  <a href="index2.php?reset=true" class="reset"> Reset</a>

 
     <div class ="results__item"> <?php echo "X-Wins:  ", $results[0]; ?> </div> 
     <div class= "results__item"> <?php echo "O-Wins:  ", $results[1]; ?> </div>
     <div class = "results__item"> <?php echo "Draws:  ", $results[2]; ?> </div>
     
<?php fclose($file_connection_c);
      fclose($file_connection_s); ?>


</body>
</html>