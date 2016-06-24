<!DOCTYPE html>
<html>

<head>
	<title> Rock, Paper, Scissors</title>
</head>

<body>
	<?php include("navigation.php") ?>
    	<?php 
    		$choices = array("rock", "paper", "scissors");
			$comp_choice = $choices[rand(0,count($choices)-1)];
			$user_choice = $_GET["userchoice"];
			$user_choice = strtolower($user_choice);

			if($user_choice != "rock" and $user_choice != "paper" and $user_choice != "scissors"){ ?>
				<p> You entered an invalid choice.</p> 
				<form action="choose.php">
					<input type="submit" value="Choose again!">
				</form>

		<?php	} ?>		

		<?php
			if($user_choice == $comp_choice){ ?>
				<p> You and the computer both chose <?php echo $user_choice ?>.</p> 
				<form action="choose.php">
					<input type="submit" value="Choose again!">
				</form>
		<?php } ?>

		<?php if($user_choice == "rock" and $comp_choice == "paper"){ ?>
			<h1> Computer Won!</h1>
			<form action="choose.php">
					<input type="submit" value="Play Again!">
			</form>
		<?php } ?>


		<?php if($user_choice == "rock" and $comp_choice == "scissors"){ ?>
			<h1> You Won!</h1>
			<form action="choose.php">
					<input type="submit" value="Play Again!">
			</form>
		<?php } ?>


		<?php if($user_choice == "paper" and $comp_choice == "scissors"){ ?>
			<h1> Computer Won!</h1>
			<form action="choose.php">
					<input type="submit" value="Play Again!">
		<?php } ?>


		<?php if($user_choice == "paper" and $comp_choice == "rock"){ ?>
			<h1> You Won!</h1>
			<form action="choose.php">
					<input type="submit" value="Play Again!">
			</form>
		<?php } ?>


		<?php if($user_choice == "scissors" and $comp_choice == "rock"){ ?>
			<h1> Computer Won!</h1>
			<form action="choose.php">
					<input type="submit" value="Play Again!">
			</form>
		<?php } ?>
			

		<?php if($user_choice == "scissors" and $comp_choice == "paper"){ ?>
			<h1> You Won!</h1>
			<form action="choose.php">
					<input type="submit" value="Play Again!">
			</form>
		<?php } ?>




</body>



</html>