<!DOCTYPE html>

<html>
	<head>
		<title> Rock,Paper,Scissors</title>
	</head>

	<body class="RPScontent">
		<?php include("../navigation.php") ?>
		<link type= "text/css" rel = "stylesheet" href= "../stylesheet.css">

		<h2> Lets play Rock, Paper, Scissors!</h2>

		<h4> Do you want to choose Rock, Paper or Scissors?</h4>

			<form action="winner.php">
  				Choice:<br>
  				<input type="text" name="userchoice">
  				<input type="submit">
    		</form>
	</body>
</html>
