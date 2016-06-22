<!DOCTYPE html>
<html>		


<?php $pageName = basename($_SERVER['PHP_SELF']); ?>

<?php if($pageName == "index.php"){ ?>
			<strong><a href="index.php" style="color:black"> Home </a></strong>
			<a href="article.php"> Article </a>
			<a href="goals.php">  Goals  </a>
			<a href="Arkansas.php"> Arkansas </a>
	 <?php } ?>

<?php if($pageName == "goals.php"){ ?>
			<a href="index.php"> Home </a>
			<a href="article.php"> Article </a>
			<strong><a href="goals.php" style="color:black">  Goals  </a></strong>
			<a href="Arkansas.php"> Arkansas </a>
<?php } ?>

<?php if($pageName == "article.php"){ ?>
			<a href="index.php"> Home </a>
			<strong><a href="article.php" style="color:black"> Article </a></strong>
			<a href="goals.php">  Goals  </a>
			<a href="Arkansas.php"> Arkansas </a>
<?php } ?>

	<?php if($pageName == "Arkansas.php"){ ?>
			<a href="index.php"> Home </a>
			<a href="article.php"> Article </a>
			<a href="goals.php">  Goals  </a>
			<strong><a href="Arkansas.php" style="color:black"> Arkansas </a></strong>
<?php } ?>




	


	<p>Profiles:</p>
	<a href="https://www.facebook.com/rachel.lyons.359">Facebook</a>
	<a href="https://www.linkedin.com/in/rachel-lyons-b885b3123">LinkedIn</a>
	<a href="https://github.com/rlyons21">GitHub</a>

</html>