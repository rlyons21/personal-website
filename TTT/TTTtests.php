<?php 

include 'TTTfunctions.php';

echo "\nTesting that X wins";
$grid = "XXXOOXXOO";
if(checkWinner($grid) == "X Wins!!"){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
}


echo "\n\n\nTesting that O wins";
$grid = "XXOOOXO-X";
if(checkWinner($grid) == "O Wins!!"){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
}


echo "\n\n\nTesting that its a draw";
$grid = "XOXXOOOXX";
if(checkWinner($grid) == "It's a draw!!"){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
}

?>