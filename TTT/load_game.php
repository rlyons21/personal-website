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

	$line = $_GET["game_number"];
	$f = "TTTstorage.txt";
	$file_connection = fopen($f, "r") or die("Error opening file");

	$lines = file($f);
	$grid = $lines[$line -1]; ?>

	<div>
		<div class = "square"><?php echo $grid[0]; ?></div>
		<div class = "square"><?php echo $grid[1]; ?></div>
		<div class = "square"><?php echo $grid[2]; ?></div><br>
		<div class = "square"><?php echo $grid[3]; ?></div>
		<div class = "square"><?php echo $grid[4]; ?></div>
		<div class = "square"><?php echo $grid[5]; ?></div><br>
		<div class = "square"><?php echo $grid[6]; ?></div>
		<div class = "square"><?php echo $grid[7]; ?></div>
		<div class = "square"><?php echo $grid[8]; ?></div>
	</div>

	<a href="index2.php" class="reset">Go Back</a>
	
</body>
</html>