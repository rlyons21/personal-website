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

	<h2> Let's play Tic-Tac-Toe!</h2>
	<h3> To play against the computer, choose One.</h3>
	<h3> To play against a friend, choose Two.</h3>

	<form action="TTTgame.php">
		<input type="submit" name="playerCount" value="One">
	</form>


	<form action="TTTgame.php">
		<input type="submit" name="playerCount" value="Two">
	</form>


</body>
</html>