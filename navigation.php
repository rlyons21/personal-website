<!DOCTYPE html>
<html>		

<link type= "text/css" rel = "stylesheet" href= "stylesheet.css">

<div class= "nav">
	<div class="nav_section1">
		<div class="nav_item"><h2 style ="font-family: cursive"> Rachel Lyons</h2></div>
			<a href="https://www.facebook.com/rachel.lyons.359">Facebook</a>
			<a href="https://www.linkedin.com/in/rachel-lyons-b885b3123">LinkedIn</a>
			<a href="https://github.com/rlyons21">GitHub</a>
	</div>

	<div class="nav_section2">
		<?php $pageName = basename($_SERVER['PHP_SELF']); ?>


<?php if($pageName == "index.php"){ ?>
			<p><strong><a href="index.php" style="color:blue"> Home </a></strong></p>
			<p><a href="goals.php">  Goals  </a><p>
			<p><a href="Arkansas.php"> Arkansas </a></p>
			<p><a href="RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><div class="nav_item"><p><a href="hack-the-pentagon.php" id=homenav> <q>Hack the Pentagon</q> </a></p></div></li>
		</ul>

	 <?php } ?>

<?php if($pageName == "goals.php"){ ?>
			<p><a href="index.php"> Home </a><p>
			<p><strong><a href="goals.php" style="color:blue">  Goals  </a></strong></p>
			<p><a href="Arkansas.php"> Arkansas </a><p>
			<p><a href="RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><div class="nav_item"><p><a href="hack-the-pentagon.php" id=homenav> <q>Hack the Pentagon</q> </a><p></div></li>
		</ul>
<?php } ?>

<?php if($pageName == "hack-the-pentagon.php"){ ?>
			<p><a href="index.php"> Home </a></p>
			<p><a href="goals.php">  Goals  </a></p> 
			<p><a href="Arkansas.php"> Arkansas </a></p> 
			<p><a href="RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><div class="nav_item"><p><a href="hack-the-pentagon.php" id=homenav style="color:blue"> <q>Hack the Pentagon</q> </a></p></div></li>
		</ul>
<?php } ?>

	<?php if($pageName == "Arkansas.php"){ ?>
			<p><a href="index.php"> Home </a></p> 
			<p><a href="goals.php">  Goals  </a></p> 
			<p><strong><a href="Arkansas.php" style="color:blue"> Arkansas </a></strong></p>
			<p><a href="RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><div class="nav_item"><p><a href="hack-the-pentagon.php" id=homenav> <q>Hack the Pentagon</q> </a></p></div></li>
		</ul>
<?php } ?>

	<?php if($pageName == "index1.php" or $pageName == "winner.php"){ ?>
			<p><a href="../index.php"> Home </a></p> 
			<p><a href="../goals.php">  Goals  </a></p> 
			<p><a href="../Arkansas.php"> Arkansas </a></p>
			<p><strong><a href="index1.php" style="color:blue">Rock, Paper, Scissors</a></strong></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><div class="nav_item"><p><a href="../hack-the-pentagon.php" id=homenav> <q>Hack the Pentagon</q> </a></p></div></li>
		</ul>
<?php } ?>
		
	</div>
</div>
	




</html>