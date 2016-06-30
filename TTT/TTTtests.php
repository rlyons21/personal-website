<?php 

include 'TTTfunctions.php';

echo "\nTesting that X wins";
$grid = "111221122";
if(checkWinner($grid) == "X Wins!!"){
	echo "\nnSuccess!";
} else {
	echo "\nnFailure";
}


echo "\n\n\nTesting that O wins";
$grid = "112221201";
if(checkWinner($grid) == "O Wins!!"){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
}


echo "\n\n\nTesting that its a draw";
$grid = "121122211";
if(checkWinner($grid) == "It's a draw!!"){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
}

?>