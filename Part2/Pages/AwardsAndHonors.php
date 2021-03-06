<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../StyleSheets/myStyle.css">
		<link rel="stylesheet" href="../StyleSheets/AwardsStyle.css">
		<link rel="stylesheet" href="../Includes/slick/slick.css"/>
		<link rel="stylesheet" href="../Includes/slick/slick-theme.css"/>
		<title>Awards And Honors</title>
	</head>

	<body>
		<?php include("../Includes/PHP/Header.php"); ?>
		<h1>Awards & Honors</h1>
		
		<!-- Container for centered text section -->
		<div class="row" style="margin-bottom:50px">
			<div class="text-center col-md-6 col-md-offset-3">
				<p>
					As a member of the University of Pittsburgh Men's Swimming and Diving team, I have had many opportunities to 
					be awarded for my athletic and acadmeic achievements. Here is a list of my most relevant awards:
				</p>
			</div>
			
			<!-- list of all my awards and honors -->
			<div class="col-md-6 col-md-offset-3">
				<ul>
					<li>ACC All-Academic Team 2014</li>
					<li>ACC Academic Honor Roll 2013-14</li>
					<li>4.0 GPA Club 2014</li>
					<li>Dean's List 2013-15</li>
					<li>Athletic Director's Honor Roll 2013-15</li>
					<li>Academic Achievement Award (Highest GPA on Men's Swimming and Diving Team) 2013, 2014</li>
					<li>Voted Most Improved Swimmer 2013-14</li>
					<li>Member of Upsilon Pi Epsilon (Computer Science Honor Society) 2015</li>
					<li>USA Swimming Winter National Qualifier 2014, 2015</li>
				</ul>
				<br/>
			
			<div class="slides">
				<div>
					<a href="http://www.theacc.com/sport/c-swim"><img src="../Images/ACC.jpg"></a>
				</div>
				
				<div>
					<a href="http://www.pittsburghpanthers.com/sports/c-swim/mtt/spencer_gray_862343.html"><img src="../Images/Swimming.jpeg"></a>
				</div>
				
				<div>
					<a href="http://upe.acm.org/"><img src="../Images/UPE.jpg"></a>
				</div>
			</div>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
			<script type="text/javascript" src="../Includes/slick/slick.min.js"></script>
			
			<script type="text/javascript">
				$(document).ready(function(){
				  $('.slides').slick({
					  autoplay: true,
					  autoplaySpeed: 3000,
				  });
				});
			</script>
	</body>
</html>