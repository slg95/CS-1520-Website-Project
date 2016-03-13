<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/StyleSheets/myStyle.css">
		<link rel="stylesheet" href="http://localhost/StyleSheets/HomeStyle.css">
		<title>Home</title>
	</head>

	<body>
		<?php include("Includes/Header.php"); ?>
		<h1>Hello and Welcome to Spencer Gray's Personal Website!</h1>
	
		<?php
			//checks to see if there is a cookie. If there is, welcomes someone 
			//back if they submitted the contact me form
			if(isset($_COOKIE["Username"]))
			{
				$name = $_COOKIE["Username"];
				echo "<p> Hello $name welcome back!</p>";
			}
		?>
	
		<p>
			This is a website all about me, Spencer Gray. The purpose of my site is to show off and give employers a few reasons to hire me.
			Below I will list the three best reasons to hire me. You can visit the other pages for more details.
		</p>
			
		<ul>
			<a href="http://localhost/Education.php"><li>I am a very strong student. I am graduating in 3 years with an excellent GPA.</li></a>
			<a href="http://localhost/AwardsAndHonors.php"><li>I am a student athelete. I am hard worker and I can work well with a team.</li></a>
			<a href="http://localhost/CommunityService.php"><li>I am highly involved with volunteering in my community. </li></a>
		</ul>
		</div>
		
	</body>

</html>