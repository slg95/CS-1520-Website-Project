<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../StyleSheets/myStyle.css">
		<link rel="stylesheet" href="../StyleSheets/HomeStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="../Includes/Scripts/Weather.js"></script>
		<script src="../Includes/Scripts/jquery.cookie.js"></script>
		<title>Home</title>
		
	</head>

	<body>
		<?php include("../Includes/PHP/Header.php"); ?>
		<h1>Hello and Welcome to Spencer Gray's Personal Website!</h1>
	
		<script type='text/javascript'>
			$(document).ready(function()
			{	
				var value = $.cookie("name");
				if(value)
				{
					document.getElementById("greeting").innerHTML = "Welcome back " + value + " it's good to have you back!";
					$("#greeting").fadeIn(2000);
				}
				
				var i = 0;
				$('li').each(function(){
					$(this).delay(i*1000).fadeIn(1000);
					i++;
				});
			});	
		</script>
	
		<p id="greeting" style="display:none"></p>
		
		<p>
			This is a website all about me, Spencer Gray. The purpose of my site is to show off and give employers a few reasons to hire me.
			Below I will list the three best reasons to hire me. You can visit the other pages for more details.
		</p>
		
		<div style="text-align:center">
			<input type="button" id="button" class="btn btn-primary btn-head"value="Get Weather!"/>
		</div>
		
		<ul>
			<li>
				<a href="Education.php">
					I am a very strong student. I am graduating in 3 years with an excellent GPA.
				</a>
			</li>
			
			<li>
				<a href="AwardsAndHonors.php">
					I am a student athelete. I am hard worker and I can work well with a team.
				</a>
			</li>	
				
			<li>
				<a href="CommunityService.php">
					I am highly involved with volunteering in my community.
				</a>
			</li>
		</ul>
		
	</body>

</html>