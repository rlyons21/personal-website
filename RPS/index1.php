<?php $title = "Rock, Paper, Scissors" ?>
<?php $pageName = "index1.php" ?>
<?php include("../top.php") ?>


	<body class="RPScontent">
		<?php include("../navigation.php") ?>

		<h2> Lets play Rock, Paper, Scissors!</h2>
		<h4> Do you want to choose Rock, Paper or Scissors?</h4>

			<form action="winner.php">
  				Choice:<br>
  				<input type="text" name="userchoice">
  				<input type="submit">
    		</form>
	</body>
</html>
