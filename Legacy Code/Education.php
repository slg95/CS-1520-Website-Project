<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/StyleSheets/myStyle.css">
		<link rel="stylesheet" href="http://localhost/StyleSheets/EducationStyle.css">
		<title>Education</title>
	</head>

	<body>
		<?php include("Includes/Header.php"); ?>
		<h1>Education</h1>
		
		<!-- Container for simple centered text -->
		<div class = "row">
			<div class = "col-md-6 col-md-offset-3">
				<p>
					I have studied Computer Science at the University of Pittsburgh since August 2013 and I am graduating this Spring, 2016. 
					I will graduate with a major in Computer Science and a Related Area in Mathematics. I am looking to begin graduate school
					for Computer Science at the University of Pittsburgh next fall. Below is a list of my programming languages and the relevant
					projects I have completed so far.
				</p>
				
				<!-- List of all my programming languages and a few projects done with each -->
				<ul>
					<li>
						<h3>Java</h3>
						<p>
							As the first language I learned, Java is my strongest. My course work is heavy in algorithms, both implementation and design. I have experience with
							encryption, recursion, backtracking, graph theory, and networking. I also have experience with designing greedy, dynamic programming, and parallel 
							algorithms. 
						</p>
					</li>
				
					<li>
						<h3>C and LINUX</h3>
						<p>
							I have used C exclusively with system software and operating system related projects. Using LINUX system calls I have completed projects
							such as deadlock prevention in a producer/consumer scenario, a basic graphics library, a device driver for a random number generator, and a file
							system. 
						</p>
					</li>
					<li>
						<h3>Python</h3>
						<p>
							In my robotic class, I learned and implemented the basics of Python to control a Kobuki mobile-base robot. Below is a picture of the type
							of robot we used:
						</p>
						<img src="Images/KobukiRobot.png" alt="Kobuki Robot">
						<p>
							The types of programs we create for the Kobuki Robot includes basic rover funcationality, collision avoidance, shooting a soccer ball into a goal,
							and voice commands. We utilized an open source projects such as OpenCV and ROS, the robotics operating system.
						</p>

					</li>
					
					<li>
						<h3>HTML, CSS, PHP, MYSQL</h3>
						<p>
							I have used these markup and programming languages for website development and database access. This website is an example!
						</p>
					</li>
					
					<li>
						<h3>MIPS/x86 Assembly Language</h3>
						<p>
							While these languages are not highly used in modern day, I have completed a few interesting projects using them. 
							In MIPS assembly language, I created an implementation of the old game snake. In x86, we were tasked with using a
							debugging tool and only the resulting x86 from three C programs to find 3 passphrases. 
						</p>
					</li>
				
				</ul>
				
			</div>
		</div>
		
	</body>

</html>