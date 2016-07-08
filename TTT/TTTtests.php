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
echo "\n\n -------------------------------------------------";

echo "\n\n\nTesting that when X wins it increments X-winning count";
$grid = "XXXOOXXOO";
$_SESSION = array("Xwins" => 1, "Owins" => 0, "draws"=> 2, "player" => "O");

if(trackResults($grid, $_SESSION) == [2, 0, 2]){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
	
}

echo "\n\n\nTesting that when O wins it increments O-winning count";
$grid = "XXOOOXO-X";
$_SESSION = array("Xwins" => 3, "Owins" => 1, "draws"=> 2, "player" => "O");

if(trackResults($grid, $_SESSION) == [3, 2, 2]){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
	
}

echo "\n\n\nTesting that when it's a draw the draw-count is incremented";
$grid = "XOXXOOOXX";
$_SESSION = array("Xwins" => 9, "Owins" => 5, "draws"=> 7, "player" => "O");

if(trackResults($grid, $_SESSION) == [9, 5, 8]){
	echo "\nSuccess!";
} else {
	echo "\nFailure";
	
}

echo "\n\n -------------------------------------------------";

echo "\n\nTesting that a square can't be marked twice";

$grid = "X--------";
$square ="0";

if(isItEmpty($grid, $square, $winner) == false){
	echo "\n\nSuccess!";
} else{ 
	echo "\n\nFailure";}

echo "\n\nTesting that a square can be marked";

$grid = "XOXOXOX--";
$square ="8";

if(isItEmpty($grid, $square, $winner) == true){
	echo "\n\nSuccess!";
} else{ 
	echo "\n\nFailure";}

echo "\n\n -------------------------------------------------";

echo "\n\nTesting that X is returned when chr = X";

$chr = "X";
if(whatMark($chr) == "X"){
	echo "\n\nSuccess!";
} else{
	echo "Failure!";
}

echo "\n\nTesting that O is returned when chr = O";

$chr = "O";
if(whatMark($chr) == "O"){
	echo "\n\nSuccess!";
} else{
	echo "Failure!";
}


echo "\n\nTesting that an empty string is returned when chr = -";

$chr = "-";
if(whatMark($chr) == ""){
	echo "\n\nSuccess!";
} else{
	echo "Failure!";
}
?>