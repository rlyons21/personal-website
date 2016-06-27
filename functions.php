

<?php
# Formats the "play again!" button form for RPS
function RPSform(){ ?>
	<form action="index1.php">
		<input type="submit" value="Play Again!">
	</form>
<?php } ?>



<?php 
# Finds the winner of a game of RPS
# prints both weapons used and winner
# produces play again button

function RPSfindWinner($user_choice,$comp_choice){ ?>
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
		<?php RPSform() ?>
	<?php } ?>


	<?php if($user_choice == "rock" and $comp_choice == "scissors"){ ?>
		<p> You chose rock.</p>
		<p> Computer chose scissors.</p>
		<h1> You Won!</h1>
		<?php RPSform() ?>
	<?php } ?>


	<?php if($user_choice == "paper" and $comp_choice == "scissors"){ ?>
		<p> You chose paper.</p>
		<p> Computer chose scissors.</p>
		<h1> Computer Won!</h1>
		<?php RPSform() ?>
	<?php } ?>


	<?php if($user_choice == "paper" and $comp_choice == "rock"){ ?>
		<p> You chose paper. Computer chose rock.</p>
		<h1> You Won!</h1>
		<?php RPSform() ?>
	<?php } ?>


	<?php if($user_choice == "scissors" and $comp_choice == "rock"){ ?>
		<p> You chose scissors.</p>
		<p> Computer chose rock.</p>
		<h1> Computer Won!</h1>
		<?php RPSform() ?>
	<?php } ?>
			

	<?php if($user_choice == "scissors" and $comp_choice == "paper"){ ?>
		<p> You chose scissors.</p>
		<p> Computer chose paper.</p>
		<h1> You Won!</h1>
		<?php RPSform() ?>
	<?php } 
} ?>