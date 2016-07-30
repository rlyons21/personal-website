

<?php
# Formats the "play again!" button form for RPS
function RPSform(){ ?>
	<form action="index1.php">
		<input type="submit" value="Play Again!">
	</form>
<?php } ?>



<?php 
# Finds the winner of a game of RPS
# returns who won or if a tie

function RPSfindWinner($user_choice,$comp_choice){ ?>
<?php
		if($user_choice == $comp_choice){ 
			return  "It's a tie!"; 
	 } ?>

	<?php if($user_choice == "rock" && $comp_choice == "paper" ||
			$user_choice == "paper" && $comp_choice == "scissors" ||
			$user_choice == "scissors" && $comp_choice == "rock"){
		return "Computer Won!";
	 } 


	if($user_choice == "rock" && $comp_choice == "scissors" ||
		$user_choice == "paper" && $comp_choice == "rock" ||
		$user_choice == "scissors" && $comp_choice == "paper"){ 
		return "You Won!";
	 } 

} ?>


<?php function themeSwitcher($_SESSION){
	if($_SESSION["theme"] == "default"){
		$_SESSION["theme"] = "alt";
	} else{
		$_SESSION["theme"] = "default";
	}
} ?>






