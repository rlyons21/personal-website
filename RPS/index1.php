<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title> Rock,Paper,Scissors</title>
		<link type= "text/css" rel = "stylesheet" href= "../stylesheet.css">
	</head>

	<body class="RPScontent">
		<?php include("../navigation.php") ?>
		<h2> Lets play Rock, Paper, Scissors!</h2>
		<h4> Do you want to choose Rock, Paper or Scissors?</h4>

			<form action="winner.php">
  				Choice:<br>
  				<input type="text" name="userchoice">
  				<input type="submit">
    		</form>
	</body>
</html>
