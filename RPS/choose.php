<!DOCTYPE html>

<html>
	<head>
		<title> Rock,Paper,Scissors</title>
	</head>

	<body>

	<h3> Do you want to choose Rock, Paper or Scissors?</h3>
		<form>
  			Choice:<br>
  			<input type="text" name="choice"><br>
    	</form>


    	<?php 
    		$choices = array("Rock", "Paper", "Scissors");
			$comp_choice = $choices[rand(0,count($choices)-1)];

    	?>



	</body>
</html>
