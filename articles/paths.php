<?php $title = "Paths: include() and href" ?>
<?php $pageName = "paths.php" ?>
<?php include("../top.php") ?>

<body class="articleContent">
	<?php include("../navigation.php") ?>

	<h3>Paths: include() and href</h3>

	<p class = "articleContent__Ps">personal_website/</p>
	<p class = "articleContent__Ps">- index.php</p>
	<p class = "articleContent__Ps">- goals.php</p>
	<p class = "articleContent__Ps">- navigation.php</p>
	<p class = "articleContent__Ps">- pets/</p>
	<p class = "articleContent__indent">   - fido.php</p>
	<p class = "articleContent__indent">   - cat.php</p>
	<p class = "articleContent__Ps">- articles/</p>
	<p class = "articleContent__indent">  - about_facebook.php</p>
	<p class = "articleContent__indent">  - how_the_web_works.php</p>

	<ol>
		<li>&lt;a href="goals.php"&gt;Goals&lt;/a&gt;</li>
		<li>&lt;a href="/goals.php"&gt;Goals&lt;/a&gt;</li>
		<li>&lt;a href="../goals.php"&gt;Goals&lt;/a&gt;</li>
		<li>&lt;a href="http://localhost:8888/personal_website/goals.php"&gt;Goals&lt;/a&gt;</li>
	</ol><br>

	Consider a website with the above file structure and links. <br><br>

	If we placed all of the links on index.php only links 1 and 4 would work. Links 2 and 3 would both give a “Not Found, The requested URL was not found on this server” error. Now if we placed all of the same links on cat.php only links 3 and 4 would work. Links 1 and 2 would give the same “Not Found, The requested URL was not found on this server” error. <br><br>

	But why would links 1 and 4 work on index.php, while links 3 and 4 would work on cat.php? This is because of how paths work. <br><br>

	There are two different types of paths: absolute paths and relative paths. Link 4 is created using an absolute path, which is why it works on both index.php and cat.php. Absolute paths refer to the very specific location, including the domain name. They are more commonly referred to as the URL and are typically used when the linked page is on another website. <br><br>

	Links 1, 2 and 3 are created using relative paths. Link 1 works on index.php because index.php and goals.php are both in the same directory, therefore you can use only the filename for the link. Link 3 works on cat.php because cat.php is located in a sub-directory, therefore goals.php is up one directory and the link must be “../filename”. Link 2 can also be a valid link. The “/“ in front of the file name will take you back to the root directory. If personal website were chosen as the root directory link 2 would work on both index.php and cat.php. <br><br>

	Paths work similarly on a localhost compared to a deployed server, however, when you are using a localhost it is accessing all of the files locally. You do not have to be connected to the internet in order to access them locally. If you are accessing files via a server, you are using the internet to access files that are located on a server, rather than your own device. Without internet connection you cannot access any files on a server. <br><br>

	Now consider the 4 links above being placed on navigation.php and then using the include function on the other files as follows: <br> <br>

	  	A) &lt;?php include("navigation.php"); ?&gt;<br>
		B) &lt;?php include("/navigation.php"); ?&gt;<br>
		C) &lt;?php include("../navigation.php"); ?&gt;<br><br><br>

	PHP’s include() is a nifty little function that takes all of the code and text from one file and will copy it into the file that uses the include statement. Paths work the same way with include as they do above. So A would work on index.php because navigation.php is in the same working directory as index.php. If personal-website is the root directory, then B would work on both index.php and articles/how_the_web_works.php. C would work in articles/how_the_web_works.php since the “../“ takes it back one directory.

</body>
</html>