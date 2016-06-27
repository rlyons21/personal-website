<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title> Rock, Paper, Scissors</title>
	<link type= "text/css" rel = "stylesheet" href= "/stylesheet.css">
</head>

<body class = "RPScontent">
	<?php $pageName = "winner.php" ?>
	<?php include("../navigation.php") ?>
	<?php include("../functions.php") ?>
   	<?php 
    	$choices = array("rock", "paper", "scissors");
		$comp_choice = $choices[rand(0,count($choices)-1)];
		$user_choice = $_GET["userchoice"];
		$user_choice = strtolower($user_choice);

		if($user_choice != "rock" and $user_choice != "paper" and $user_choice != "scissors"){ ?>
			<p> You entered an invalid choice.</p> 
			<form action="index1.php">
				<input type="submit" value="Choose again!">
			</form>

	<?php	} ?>	

	<?php RPSfindWinner($user_choice,$comp_choice) ?>
	

</body>
</html>