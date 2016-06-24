<!DOCTYPE html>

<html>
	<head>
		<title> Rock,Paper,Scissors</title>
	</head>

	<body>

	<h3> Do you want to choose Rock, Paper or Scissors?</h3>
		<form>
  			Choice:<br>
  			<input type="text" name="userchoice"><br>
    	</form>


    	<?php 
    		$choices = array("Rock", "Paper", "Scissors");
			$comp_choice = $choices[rand(0,count($choices)-1)];

			$user_choice = $_GET["userchoice"];

			if($user_choice == $comp_choice){ ?>
				<p> You and the computer both chose <?php $user_choice ?>. Choose again!</p>
			<?php } ?>

			<?php
			else{
				
			}
    





	</body>
</html>
