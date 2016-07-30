<?php session_start(); ?>
<?php include("functions.php") ?>

<?php if(empty($_SESSION)){
	$_SESSION["theme"] = "default";
} ?>

<?php if($_SESSION["theme"] == "alt"){ ?>
	
	<link type= "text/css" rel = "stylesheet" href= "stylesheet.css">
<?php } else { ?>
	<link type= "text/css" rel = "stylesheet" href= "alt-style.css">
<?php } ?>


<div class= "nav">
	<div class="nav_section1">
		<h2 > Rachel Lyons</h2>
		<a href="https://www.facebook.com/rachel.lyons.359">
			<img src="/images/facebook.png" alt="Facebook">
		</a>
		<a href="https://www.linkedin.com/in/rachel-lyons-b885b3123"><img src="/images/linkedin.png" alt="LinkedIn"></a>
		<a href="https://github.com/rlyons21"><img src="/images/github.png" alt="GitHub"></a>
		
		<?php if($_SESSION["theme"] == "alt"){ ?>
		<button class="themeSwitcher" onclick="<?php themeSwitcher() ?>"></button>
		
	</div>

	<div class="nav_section2">
	 <p><?php  if($pageName == "index.php") { ?> <b>Home</b> <?php }  
					else { ?> <a href = "/index.php">Home</a> <?php } ?><p>
				
	<p><?php	if($pageName == "goals.php") { ?> <b>Goals</b> <?php } 
					else { ?> <a href = "/goals.php">Goals</a> <?php } ?><p>
				
	<p><?php	if($pageName == "Arkansas.php") { ?> <b>Arkansas</b> <?php } 
					else { ?> <a href = "/Arkansas.php">Arkansas</a> <?php } ?><p>
	<h4><em> Projects</em></h4>
	
	<li> <?php	if($pageName == "index1.php" or $pageName == "winner.php") { ?> <b>Rock, Paper, Scissors</b> <?php } 
					else { ?> <a href = "/RPS/index1.php">Rock, Paper, Scissors</a> <?php } ?> </li>	
	<li> <?php	if($pageName == "index2.php") { ?> <b>Tic Tac Toe</b> <?php } 
					else { ?> <a href = "/TTT/index2.php">Tic Tac Toe</a> <?php } ?> </li>
	
	<h4><em> Articles </em></h4>

	<li> <?php	if($pageName == "hack-the-pentagon.php") { ?> <b>Hack the Pentagon</b> <?php } 
					else { ?> <a href = "/articles/hack-the-pentagon.php">Hack the Pentagon</a> <?php } ?> </li>	

	<li> <?php	if($pageName == "HTML-tags.php") { ?> <b>HTML Tags</b> <?php } 
					else { ?> <a href = "/articles/HTML-tags.php">HTML Tags</a> <?php } ?> </li>

	<li> <?php	if($pageName == "the-web.php") { ?> <b>The Web</b> <?php } 
					else { ?> <a href = "/articles/the-web.php">The Web</a> <?php } ?> </li>

	<li> <?php	if($pageName == "paths.php") { ?> <b>Paths: include() and href</b> <?php } 
					else { ?> <a href = "/articles/paths.php">Paths: include() and href</a> <?php } ?> </li>

	<li> <?php	if($pageName == "tic-tac-toe.php") { ?> <b>Tackling Tic-Tac-Toe</b> <?php } 
					else { ?> <a href = "/articles/tic-tac-toe.php">Tackling Tic-Tac-Toe</a> <?php } ?> </li>	

	<li> <?php	if($pageName == "personal-directory.php") { ?> <b>Personal Directory</b> <?php } 
					else { ?> <a href = "/articles/personal-directory.php">Personal Directory</a> <?php } ?> </li>

	<li> <?php	if($pageName == "OCS-update.php") { ?> <b>Code School Update</b> <?php } 
					else { ?> <a href = "/articles/OCS-update.php">Code School Update</a> <?php } ?> </li>	
		
	</div>
</div>