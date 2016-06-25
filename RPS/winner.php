<!DOCTYPE html>
<html>

<head>
	<title> Rock, Paper, Scissors</title>
</head>

<body class = "RPScontent">
	<?php include("../navigation.php") ?>
	<link type= "text/css" rel = "stylesheet" href= "../stylesheet.css">
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

	<?php
		if($user_choice == $comp_choice){ ?>
			<p> You and the computer both chose <?php echo $user_choice ?>.</p> 
			<form action="index1.php">
				<input type="submit" value="Choose again!">
			</form>
	<?php } ?>

	<?php if($user_choice == "rock" and $comp_choice == "paper"){ ?>
		<p> You chose rock.</p>
		<p> Computer chose paper.</p>
		<h1> Computer Won!</h1>
		<form action="index1.php">
				<input type="submit" value="Play Again!">
		</form>
	<?php } ?>


	<?php if($user_choice == "rock" and $comp_choice == "scissors"){ ?>
		<p> You chose rock.</p>
		<p> Computer chose scissors.</p>
		<h1> You Won!</h1>
		<form action="index1.php">
				<input type="submit" value="Play Again!">
		</form>
	<?php } ?>


	<?php if($user_choice == "paper" and $comp_choice == "scissors"){ ?>
		<p> You chose paper.</p>
		<p> Computer chose scissors.</p>
		<h1> Computer Won!</h1>
		<form action="index1.php">
				<input type="submit" value="Play Again!">
		</form>
	<?php } ?>


	<?php if($user_choice == "paper" and $comp_choice == "rock"){ ?>
		<p> You chose paper. Computer chose rock.</p>
		<h1> You Won!</h1>
		<form action="index1.php">
				<input type="submit" value="Play Again!">
		</form>
	<?php } ?>


	<?php if($user_choice == "scissors" and $comp_choice == "rock"){ ?>
		<p> You chose scissors.</p>
		<p> Computer chose rock.</p>
		<h1> Computer Won!</h1>
		<form action="index1.php">
				<input type="submit" value="Play Again!">
		</form>
	<?php } ?>
			

	<?php if($user_choice == "scissors" and $comp_choice == "paper"){ ?>
		<p> You chose scissors.</p>
		<p> Computer chose paper.</p>
		<h1> You Won!</h1>
		<form action="index1.php">
			<input type="submit" value="Play Again!">
		</form>
	<?php } ?>

</body>
</html>