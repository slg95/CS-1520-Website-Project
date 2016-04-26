<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../StyleSheets/myStyle.css">
		<link rel="stylesheet" href="../StyleSheets/ContactStyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="../Includes/Scripts/jquery.cookie.js"></script>
		<title>Contact Me</title>
	</head>

	<body>
		<?php 
			include("../Includes/PHP/Header.php"); 
		?>
		<h1>Contact me!</h1>
		<!-- Simple form that submits to my database using the POST method -->
		<form id="myForm">
			<table>
				<tr>
					<td>First name* : </td>
					<td><input type="text" name="Fname" size="30" id="Fname"/> </td>
				</tr>
				
				<tr>
					<td>Last name* : </td>
					<td><input type="text" name="Lname" size="30" id="Lname"/> </td>
				</tr>
			
				<tr>
					<td>Company/Organization: </td>
					<td><input type="text" name="Company" size="30" id="company"/> </td>
				</tr>
				
				<tr>
					<td>Preferred Method of Contact: </td>
					<td>
						<select name="Contact" id="Contact">
							<?php
								//iterates through the options for the drop down menu
								$methods = array("Email", "Phone", "Mail", "Telegraph", "Carrier Pidgeon");
								foreach ($methods as $method)
								{
									echo "<option value = \"$method\">$method</option>";
								}
							?>
						</select>
					</td>
				</tr>
				
				<tr id="method"><td>Email address:</td><td><input type="text" name="Email" size="30"/> </td></tr>
				
				<tr>
					<td>Reason for contact* : </td>
					<td>
						<select name="Reason" id="Reason">
							<?php
								//iterates through the options for the second drop down menu
								$reasons = array("Job Opportunity", "Internship Opportunity", "Contract Work", "Swim Team Opportunity", "You Missed Me");
								foreach($reasons as $reason)
								{
									echo "<option value = \"$reason\">$reason</option>";
								}
							?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td id="DescriptionType">Job Description:</td>
					<td><textarea name="Description" cols="30" rows="5" id="BriefDescription"/></textarea></td>
				</tr>
				<!-- Large text box for additional comments to my form -->
					<td>Additional Comments:</td>
					<td><textarea name="Comments" id="Comments" cols="30" rows="5"></textarea></td>
				</tr>
				
				<!--Button to submit the form -->
				<tr>
					<td colspan="2" style="text-align: center"> <input type="button" id="sub" value="Enter!"/> </td>
				</tr>
				
				<!-- Reminder that some of the elements in the form are required and some are not -->
				<tr>
					<td colspan="2" style="text-align: center">Note: * denotes required field</td>
				</tr>
			
			</table>
			
			<div id="messages"></div> 
			<script src="../Includes/Scripts/Contact.js"></script>
			
	</body>

</html>