
	<link type= "text/css" rel = "stylesheet" href= "stylesheet.css">


<div class= "nav">
	<div class="nav_section1">
		<h2 > Rachel Lyons</h2>
		
	</div>

	<div class="nav_section2">
	<li> <?php  if($pageName == "index.php") { ?> <b>Home</b> <?php }  
					else { ?> <a href = "/index.php">Home</a> <?php } ?> </li> 
				
	<li> <?php	if($pageName == "goals.php") { ?> <b>Goals</b> <?php } 
					else { ?> <a href = "/goals.php">Goals</a> <?php } ?> </li>
				
	<li> <?php	if($pageName == "Arkansas.php") { ?> <b>Arkansas</b> <?php } 
					else { ?> <a href = "/Arkansas.php">Arkansas</a> <?php } ?> </li>

	<li> <?php	if($pageName == "index1.php" or $pageName == "winner.php") { ?> <b>Rock, Paper, Scissors</b> <?php } 
					else { ?> <a href = "/RPS/index1.php">Rock, Paper, Scissors</a> <?php } ?> </li>	

	<li> <?php	if($pageName == "hack-the-pentagon.php") { ?> <b>Hack the Pentagon</b> <?php } 
					else { ?> <a href = "/articles/hack-the-pentagon.php">Hack the Pentagon</a> <?php } ?> </li>	

	<li> <?php	if($pageName == "HTML-tags.php") { ?> <b>HTML Tags</b> <?php } 
					else { ?> <a href = "/articles/HTML-tags.php">HTML Tags</a> <?php } ?> </li>

	<li> <?php	if($pageName == "the-web.php") { ?> <b>The Web</b> <?php } 
					else { ?> <a href = "/articles/the-web.php">The Web</a> <?php } ?> </li>		
	
	</div>
</div>