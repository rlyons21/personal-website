<?php $title = "Rock, Paper, Scissors" ?>
<?php $pageName = "winner.php" ?>
<?php include("../top.php") ?>
<?php include("../navigation.php") ?>

<body class = "RPScontent">

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