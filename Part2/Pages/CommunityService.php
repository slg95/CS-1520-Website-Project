<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/Part2/StyleSheets/myStyle.css">
		<title>Community Service</title>
	</head>

	<body>
		<?php 
			include("../Includes/Header.php"); 
			include("../Includes/buildSection.php");
		?>
		<h1>My Community Service</h1>
		
		<!-- Container for centered text -->
		<div class="row" style="margin-bottom:50px">
			<div class="text-center col-md-6 col-md-offset-3">
				<p>
					Throughout my 3 years at the University of Pittsburgh I have had the opportuity to volunteer in a number of ways. 
				</p>
			</div>
			
			<div class="col-md-6 col-md-offset-3">
			<?php
				//section for my Special Olympics volunteering
				$text = "Every year, the Pittsburgh Swimming and Diving team hosts the Allegheny County Special Olympic Swim Meet.". 
						"We assist in activities ranging from timing the athletes races to in-water supervision.";
				buildSection("Special Olympics", "http://www.so-ac.org/", "../Images/Olympic-Rings.png", $text);
			?>
			
			<br/>
			<?php
				//section for my Panther Swim Club volunteering
				$text = "Last year, I was a volunteer coach for the club swim team at the University of Pittsburgh. I wrote and directed".
						"workouts on a weekly basis and provided technique and training expertise. ";
				buildSection("Panther Swim Club", "", "../Images/PSC.jpg", $text);
			?>
				
			<br/>	
			<?php
				//section for my Team Pitt volunteering
				$text = "Throughout the past few years, I have volunteered at many Team Pittsburgh swim meets. Team Pittsburgh".
						"is an age group swim club that practices at Trees Pool. My jobs have ranged from".
						"safety marshall to helping run the timing system to timing the races with a stopwatch.";
				buildSection("Team Pittsburgh Aquatics", "http://www.teampittsburgh.com/html/New%20Site/index.htm", "../Images/teampittlogo.JPG", $text);
			?>	
				
			</div>
		</div>
	</body>

</html>