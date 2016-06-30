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
  parse_str($_SERVER['QUERY_STRING'], $query);
  $grid = isset($query['grid']) ? $query['grid'] : "000000000";
  $player = isset($query['player']) ? $query['player'] : 1;
  $winner = checkWinner($grid);
  printGrid($grid, $player, $winner);
?></div>

<?php
  
  if ($winner) {
    echo <<<HTML
      <div class="winner">$winner</div>
HTML;
  }
?>

  <a href="index2.php" class="reset">Reset</a>

</body>
</html>