<?php session_id("theme"); ?> 
<?php session_start(); ?>


<?php if($_GET["theme"]){
	$_SESSION["theme"] = $_GET["theme"];
} 

?>

<?php if($_SESSION["theme"] == "alt"){ ?>
	<link type= "text/css" rel = "stylesheet" href= "/alt-style.css">
<?php } else { ?>
	<link type= "text/css" rel = "stylesheet" href= "/stylesheet.css">
<?php } ?>


<div class= "nav">
	<div class="nav_section1">
		<h2 > Rachel Lyons</h2>
		<a href="https://www.facebook.com/rachel.lyons.359">
			<img src="/images/facebook.png" alt="Facebook">
		</a>
		<a href="https://www.linkedin.com/in/rachel-lyons-b885b3123"><img src="/images/linkedin.png" alt="LinkedIn"></a>
		<a href="https://github.com/rlyons21"><img src="/images/github.png" alt="GitHub"></a>

		
		<?php if($_SESSION["theme"] == "default"){ ?>
			
			<form>
				<button class="themeSwitcher" name="theme" value="alt"></button>
			</form>
		
		<?php } else { ?>
		
			<form>
				<button class="themeSwitcher" name="theme" value="default"></button>
			</form>
		
		<?php } ?>
	
	</div>



	<div class="nav_section2">
	 <p><?php  if($pageName == "index.php") { ?> <b>Home</b> <?php }  
					else { ?> <a href = "/index.php">Home</a> <?php } ?><p>
				
	<p><?php	if($pageName == "goals.php") { ?> <b>Goals</b> <?php } 
					else { ?> <a href = "/goals.php">Goals</a> <?php } ?><p>
				
	<p><?php	if($pageName == "Arkansas.php") { ?> <b>Arkansas</b> <?php } 
					else { ?> <a href = "/Arkansas.php">Arkansas</a> <?php } ?><p>

	<p><?php	if($pageName == "articles.php") { ?> <b>Articles</b> <?php } 
					else { ?> <a href = "/articles.php">Articles</a> <?php } ?><p>
	
	<h4><em> Projects</em></h4>
	
	<ul class="navList">
		<li> <?php	if($pageName == "index1.php" or $pageName == "winner.php") { ?> <b>Rock, Paper, Scissors</b> <?php } 
						else { ?> <a href = "/RPS/index1.php">Rock, Paper, Scissors</a> <?php } ?> </li>	
		<li> <?php	if($pageName == "TTTgame.php" or $pageName == "index2.php") { ?> <b>Tic Tac Toe</b> <?php } 
						else { ?> <a href = "/TTT/index2.php">Tic Tac Toe</a> <?php } ?> </li>
	</ul>	
	
	</div>
</div>