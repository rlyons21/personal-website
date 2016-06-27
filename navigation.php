
	<link type= "text/css" rel = "stylesheet" href= "stylesheet.css">

<div class= "nav">
	<div class="nav_section1">
		<h2 style ="font-family: cursive"> Rachel Lyons</h2>
			<a href="https://www.facebook.com/rachel.lyons.359"><img src="fbIcon.jpeg" alt="Facebook"/></a>
			<a href="https://www.linkedin.com/in/rachel-lyons-b885b3123"><img src="inIcon.png" alt="LinkedIn"/></a>
			<a href="https://github.com/rlyons21"><img src="githubSymbol.png" alt="GitHub"/></a>
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
			<li><p><a href="articles/hack-the-pentagon.php">Hack the Pentagon</a></p></li>
			<li><p><a href="articles/the-web.php">The Web</a></p></li>
			<li><p><a href="articles/HTML-tags.php">HTML Tags</a></p></li>
		</ul>

	 <?php } ?>

<?php if($pageName == "goals.php"){ ?>
			<p><a href="index.php"> Home </a><p>
			<p><strong><a href="goals.php" style="color:blue">  Goals  </a></strong></p>
			<p><a href="Arkansas.php"> Arkansas </a><p>
			<p><a href="RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><p><a href="articles/hack-the-pentagon.php">Hack the Pentagon</a></p></li>
			<li><p><a href="articles/the-web.php">The Web</a></p></li>
			<li><p><a href="articles/HTML-tags.php">HTML Tags</a></p></li>
		</ul>
<?php } ?>

	<?php if($pageName == "Arkansas.php"){ ?>
			<p><a href="index.php"> Home </a></p> 
			<p><a href="goals.php">  Goals  </a></p> 
			<p><strong><a href="Arkansas.php" style="color:blue"> Arkansas </a></strong></p>
			<p><a href="RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><p><a href="articles/hack-the-pentagon.php">Hack the Pentagon</a></p></li>
			<li><p><a href="articles/the-web.php">The Web</a></p></li>
			<li><p><a href="articles/HTML-tags.php">HTML Tags</a></p></li>
		</ul>
<?php } ?>

	<?php if($pageName == "index1.php" or $pageName == "winner.php"){ ?>
			<p><a href="../index.php"> Home </a></p> 
			<p><a href="../goals.php">  Goals  </a></p> 
			<p><a href="../Arkansas.php"> Arkansas </a></p>
			<p><strong><a href="index1.php" style="color:blue">Rock, Paper, Scissors</a></strong></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><p><a href="../articles/hack-the-pentagon.php">Hack the Pentagon</a></p></li>
			<li><p><a href="../articles/the-web.php">The Web</a></p></li>
			<li><p><a href="../articles/HTML-tags.php">HTML Tags</a></p></li>
		</ul>
<?php } ?>
		
<?php if($pageName == "hack-the-pentagon.php"){ ?>
			<p><a href="../index.php"> Home </a></p>
			<p><a href="../goals.php">  Goals  </a></p> 
			<p><a href="../Arkansas.php"> Arkansas </a></p> 
			<p><a href="../RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><p><a href="hack-the-pentagon.php" style="color:blue">Hack the Pentagon</a></p></li>
			<li><p><a href="the-web.php">The Web</a></p></li>
			<li><p><a href="HTML-tags.php">HTML Tags</a></p></li>
		</ul>
<?php } ?>

<?php if($pageName == "the-web.php"){ ?>
			<p><a href="../index.php"> Home </a></p>
			<p><a href="../goals.php">  Goals  </a></p> 
			<p><a href="../Arkansas.php"> Arkansas </a></p> 
			<p><a href="../RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><p><a href="hack-the-pentagon.php">Hack the Pentagon</a></p></li>
			<li><p><a href="the-web.php" style="color:blue">The Web</a></p></li>
			<li><p><a href="HTML-tags.php">HTML Tags</a></p></li>
		</ul>
<?php } ?>

<?php if($pageName == "HTML-tags.php"){ ?>
			<p><a href="../index.php"> Home </a></p>
			<p><a href="../goals.php">  Goals  </a></p> 
			<p><a href="../Arkansas.php"> Arkansas </a></p> 
			<p><a href="../RPS/index1.php">Rock, Paper, Scissors</a></p>
			<p style="padding:2px"> Articles</p>
		<ul>
			<li><p><a href="hack-the-pentagon.php">Hack the Pentagon</a></p></li>
			<li><p><a href="the-web.php">The Web</a></p></li>
			<li><p><a href="HTML-tags.php" style="color:blue">HTML Tags</a></p></li>
		</ul>
<?php } ?>
	</div>
</div>