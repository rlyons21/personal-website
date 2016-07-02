<?php session_start(); ?>
<?php $pageName = "index2.php" ?>
<?php include 'TTTfunctions.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tic Tac Toe</title>
  <link rel="stylesheet" href = "../stylesheet.css">
  <link rel="stylesheet" href="TTTstylesheet.css">
</head>
<body class = TTTcontent>


<div class="grid">
<?php
  if($_GET["reset"]){
    $_SESSION = null;
  }


  parse_str($_SERVER['QUERY_STRING'], $query);
  $grid = isset($query['grid']) ? $query['grid'] : "0000000001";
  $player = $grid[9];
  $winner = checkWinner($grid);
  $results = trackResults($grid);



if($player == "2") {
  if(isset($winner) == true){
    printGrid($grid,$player,$winner);
  }else {
   $grid = compMove($grid,$winner, $player);
   $player = "1";
   $winner = checkWinner($grid);
   $results= trackResults($grid);
 }
} 

if($player == "1"){
   printGrid($grid, $player, $winner);
   $player = "2";
}

 

  
?></div>

<?php
  
  if ($winner) {
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
     



</body>
</html>