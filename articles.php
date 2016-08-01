<?php $title = "Articles" ?>
<?php $pageName = "articles.php" ?>
<?php include("/top.php") ?>


	<body class="articleContent">


		<?php include("/navigation.php") ?>

		<div class="topContainer">
			<div class="articleTab" id="hack-the-pentagon">Hack the Pentagon</div>
			<div class="articleTab" id="the-web">The Web</div>
			<div class="articleTab" id="HTMLtags">HTML Tags</div>
			<div class="articleTab" id="paths">Paths</div>
			<div class="articleTab" id="TTT">Tic Tac Toe</div>
			<div class="articleTab" id="directory">Personal Directory</div>
			<div class="articleTab" id="update">OCS Update</div>
		</div>

		<div class="article" id="art_hack-the-pentagon">
			<h3>Hack the Pentagon</h3>
			<h4><em> What I Found Interesting & Questions Raised</em></h4>

			<p><q>Hack the Pentagon</q> is a pilot project that the U.S. Department of Defense used to test for vulnerability in public Defense Department websites. It invited individuals to try hacking U.S. Department of Defense websites and report any vulnerabilities or security issues without getting in trouble.</p>

			<p> David Dworkin is an 18 year-old who just finished his senior year of high school. Dworkin spent his passing periods between classes trying to hack government websites. He found and reported six vulnerabilities. More than 1,400 other people participated and found 138 valid reports of vulnerabilities. Some of the issues found would have let others put whatever content they wanted on the websites or steal account information.</p>

			<p> The Pentagon awarded roughly $75,000 total to successful hackers. Awards ranged anywhere from $100 to $15,000. <q>Hack the Pentagon</q> cost approximately $150,000, which is significantly less than hiring a firm to run security and vulnerability assessments (costs more than $1 million).</p>

			<p> 138 valid reports of vulnerability on U.S. Department of Defense websites sounds like a lot of security problems for government websites. I imagine that the Department of Defense has many highly-skilled individuals developing and maintaining its sites. So how does that many major problems get past so many intelligent eyes?</p>

			<p> Being able to edit content and steal account information are obvious security problems, but what other types of issues would raise concern and make a website be considered vulnerable? Is there any way to test vulnerability of a website before it is made public? </p>
		</div>

		<div class="article" id="art_HTMLtags">
			<h3>HTML Tags</h3>
			<p>The &lt;html&gt; tag tells the browser that the file is an HTML document. All other HTML elements, excluding &lt;!DOCTYPE&gt;, are nested within &lt;html&gt; tags. Both the &lt;head&gt; and &lt;body&gt; tags (and their contents) are contained by &lt;html&gt; tags.</p>

			<p>The &lt;head&gt; element contains metadata (data about data). In other words, the &lt;head&gt; holds data about the HTML document. This includes the following tags: &lt;title&gt;, &lt;style&gt;, &lt;meta&gt;, &lt;link&gt;, &lt;script&gt;, and &lt;base&gt;.</p>

			<p>&lt;title&gt; : Defines the title of the document and is required in all HTML documents</p>
			<p>&lt;style&gt; : Defines style information such as background-color, font-family, font-size, etc.</p>
			<p>&lt;meta&gt; : Specifies page description, keywords, author, and more. Browsers use it for how to display content and search engines will use keywords</p>
			<p>&lt;link&gt; : Links the current page to an external resource, usually a stylesheet, and defines the relationship between the two pages</p>
			<p>&lt;script&gt; : Define a client-side (executed client-side e.g. web browser) script, like Javascript</p>
			<p>&lt;base&gt; : Specifies the default address/target for all links on a page</p>

			<p>The &lt;body&gt; tag defines an HTML document’s body. It contains all of the content that will appear. It consists of text, hyperlinks, images, tables, and lists. &lt;h1&gt; to &lt;h6&gt;, &lt;p&gt;,&lt;a&gt;,&lt;img&gt; and &lt;div&gt; are probably the most common elements within the &lt;body&gt;.</p>

			<p>&lt;h1&gt; to &lt;h6&gt;: Are different sized headings, with &lt;h1&gt; being the largest and &lt;h6&gt; being the smallest</p>
			<p>&lt;p&gt; : Define a paragraph</p>
			<p>&lt;a&gt; : Defines a hyperlink, which links one page to another</p>
			<p>&lt;img&gt; : Defines an image</p>
			<p>&lt;div&gt; : Defines a section in an HTML document</p>
		</div>


		<div class="article" id="art_paths">

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
		</div>



		<div class="article" id="art_the-web">

			<h3>The Web</h3>
			<p>I started using the internet in school around 2nd grade. I didn’t know how it worked, I only knew that when my teacher told me to click somewhere that my screen would change in some way, shape or form. By 5th grade I was using it for both school and entertainment. By the time I got into high school I couldn’t imagine life without it, yet I was still oblivious as to how it all worked. </p>

			<p>I grew up with the internet at my fingertips. I use it every single day, whether it be for social media, watching Netflix or looking up random bits of information. If you want to know about anything, you are almost guaranteed to find some, if not a plethora, of information about it on the internet. It is a very good tool for research and learning, however, it is also full of distractions. Whether it is good or bad depends on how you are using it in that given moment. </p>

			<p>But how does the internet work? Internet is short for interconnected network. There are countless computers and devices all over the world that are all interconnected. The computer that is going to send data must first be connected to an internet service prover's (ISP) point of presence (POP), which is an access point that allows you to connect to the internet. All POPs are connected to network access points (NAP). All NAPs are connected to each other via fiber optic cables. Before data can be sent, it is broken into smaller packages that are sent individually with instructions about reassembly for the receiving device. The data is sent via cables (usually copper) to a POP and then onto the internet and travel to different NAPs all over via fiber optic cables. Each device has an I.P. address that tells where the data packets are being sent to. Routers are what guide the packets in the right direction. When all of the packets are received, they are reassembled to make an exact copy of whatever was sent.</p>
		</div>

		<div class="article" id="art_TTT">
			<h3> Tackling Tic-Tac-Toe</h3>
			<h4> Day 1 :</h4>
			<p> Before I can begin coding anything, first I have to map out a plan. Building a simple game like tic tac toe sounds easy enough, but knowing only the end result is not enough information to get me there. I began by using a flowchart to write out all of the steps of a game of tic tac toe. I also jotted down a few functions I knew I would need to write, such as a function to check if there is a winner. Next I began to focus on building the grid. I knew I had multiple options for doing this. Using html I could use a 3x3 table or divs. I decided to go with divs.</p>

			<p> As you can see I was a little bit all over the place when trying to plan and map out how to tackle this new beast. Due to this, I hit a wall and did not make much more progress. I was getting ahead of myself, focussing more on the final product than on the steps I needed to take in order to get there. I found it hard to wrap my head around all of the functions I would need to work together and how how they would all fit together. In order to overcome this, I began looking at how classmates who were further along were tackling this project. </p>


			<h4> Day 2 :</h4>
			<p>I spent a lot of time looking at other people’s code. I went through making sure I understood how each piece of code worked and how it affected the project as whole. Once I felt I was ready, I began focussing on all of the functions. One by one I wrote code for functions that would check for a winner, determine what mark to use, print a single square, and print the entire grid.  This may not seem like much, but each function took time to build. Some took much longer than others. But in order for tic tac toe to work properly, I have to know that each piece is working as expected first. So before moving on from a function I would test to see if it was returning what I expected. Many times it wasn’t, so I would rewrite parts of it until it finally passed my tests. At the end of the day, I still did not have a working game of tic tac toe. I did not have all of my needed functions working properly either. But I did make a lot of progress, knew where I was going and had a plan in my head about how to to get there.</p>
		</div>

		<div class="article" id="art_directory">

			<h2>Personal Directory</h2>

			<h3>Request</h3>
			 A request is sent when a client wants to retrieve information from a server. For example, when you click on a profile link on Facebook, your computer is requesting to veiw that profile.<br><br>

			<h3>Query String Parameters</h3>
			URLs can contain query strings which contain data that don't fit into a path structure. For example, when building a game of Tic-Tac-Toe, it would be a hassel to have to build a page for every possible board, instead you can pass the state of the board onto the next page by using a query string. The query string is located in the URL following a "?". The parameters are stored as: "variable=value"<br><br>


			<h3>HTTP</h3>
			HTTP is shorthand for Hypertext Transfer Protocol. It is the set of rules for transferring files on the internet. HTTP defines how messages are formatted and transmitted, and what actions Web servers and browsers should in response to various commands. HTTP is considered to be a stateless protocol because commands are executed independently of each other.<br><br>


			<h3>Server</h3>
			 A computer program or device that manages network resources. There are many different types of servers, such as data servers, file servers, proxy servers, and more. Servers recieve requests and send responses back to clients.<br><br>

			<h3>Client</h3>
			 Computers, cell phones, and tablets can all be clients. They access information from servers by sending requests and recieving responses.<br><br> 

			<h3>Response</h3>
			 When a server receives a request, the request information is quickly processed and a response that travels from server to client is sent. The response is the information that is sent back to the client.<br><br> 

			<h3>Pre-Processor</h3>
			 A program that proceses input data by modifying the data to fit the input requirements of another program.
		 </div>

		 <div class="article" id="art_update">

			 <h3>Update: How things have been Going at Code School</h3>

			<p> For the last couple of weeks our class has been split into groups
			to work on different projects. My group consisted of Mike, Matt and me.
			We were assigned to build a To-Do List app for a specific family that 
			allows tasks to be deleted, added, editted, and filtered by who it is
			assigned to.<br><br>
			This project marked the split between front-end and back-end, but during the
			first week of working on the project I spent time on both front-end and
			back-end. I worked on making the feature of being able to delete a task,
			and also tried to help those in my group with functions if they were 
			struggling. We had a lot of ups and downs throughout the first week.
			The first day we felt we had made a lot of good progress, however,
			the second day we all seemed to hit a wall. With the help of our 
			instructors we managed to build more momentum for the rest of the week.<br><br>
			The second week I focussed mainly on the front-end side our app. We started
			learning JavaScript which allowed me to add some more features to our app.
			We now are able to toggle both completed and unfished lists. I was also 
			able to implement a couple of modals for adding and editting tasks.<br><br>
			When using JavaScript before I did not particularly enjoy it, however,
			now that I'm using the language to improve front-end designs it is really
			starting to grow on me.</p>
		</div>

	</body>
</html>