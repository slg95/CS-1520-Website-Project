<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../StyleSheets/myStyle.css">
		<title>Employment</title>
	</head>

	<body>
		<?php 
			include("../Includes/PHP/Header.php"); 
			include("../Includes/PHP/buildSection.php")
		?>
		<h1>My Employment History</h1>
		<!--Container used to center text -->
		<div class="row">
			<div class="text-center col-md-6 col-md-offset-3">
				<p>
					While my employment is limited, below are the two jobs I have had:
				</p>
			</div>
			
			<div class="col-md-6 col-md-offset-3">
				<?php
					//creates the section about my camp counselor job
					
					$text = "This past summer, 2015, I worked as a camp counselor for the Nike Swimming Camp".
							"through the University of Pittsburgh. I was responsible for swim instruction for local".
							"children between the ages of 10-18.";
					buildSection("Camp Counselor", "http://www.ussportscamps.com/swim/nike/", "../Images/nike-logo.png", $text);
				?>
				
			<br/>
				<?php
					//creates the section about my lifeguard job
					
					$text = "The summer of 2013 and 2014 I worked as a lifeguard at Otter Cove Aquatic Park. It was a local".
							"park district pool with a few slides and diving boards. My duties included training to be CPR, AED".
							"and First Aid certified in order to supervise and maintain safety in the aquatic environment.";
					buildSection("Lifeguard", "http://www.ottercove.org/", "../Images/OtterCoveLogo.gif", $text);
				?>
				
			</div>
	</body>

</html>