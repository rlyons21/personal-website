<?php 

include("/Users/rachellyons/Code/personal-website/functions.php");

echo "\n Testing for tie, user and computer both chose rock:\n";
if(RPSfindWinner("rock", "rock") == "It's a tie!") {
	echo "Success";
} else {
	echo "Failure";
}


echo "\n\n Testing for user win, user chose scissors and computer chose paper:\n";
if(RPSfindWinner("scissors", "paper") == "You Won!") {
	echo "Success";
} else {
	echo "Failure";
}

echo "\n\n Testing for computer win, user chose rock and computer chose paper:\n";
if(RPSfindWinner("rock", "paper") == "Computer Won!") {
	echo "Success";
} else {
	echo "Failure";
}

?>