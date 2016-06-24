<!DOCTYPE html>

<html>
	<head>
		<title> Rock,Paper,Scissors</title>
	</head>

	<body>
	<?php include("navigation.php") ?>

	<h3> Do you want to choose Rock, Paper or Scissors?</h3>

		<form action="winner.php">
  			Choice:<br>
  			<input type="text" name="userchoice">
  			<input type="submit">
    	</form>

	</body>
</html>
