<?php session_start(); ?>
<?php $pageName = "index2.php" ?>
<?php include 'TTTfunctions.php' ?>
<?php include '../navigation.php' ?>
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
  $count = 0;
  $winner = checkWinner($grid);
  $results = trackResults($grid);


if($player == "1"){
   printGrid($grid, $player, $winner);
}

if($player == "2"){
   $newGrid = compMove($grid,$winner, $player);
   printGrid($newGrid,$player,$winner);
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

 
     <div><p class ="results"> <?php echo "X-Victories:  ", $results[0]; ?> </p></div>
     <div><p class= "results"> <?php echo "O-Victories:  ", $results[1]; ?> </p></div>
     <div><p class = "results"> <?php echo "Cat's Games:  ", $results[2]; ?> </p></div>
     



</body>
</html>