<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale = 1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/StyleSheets/myStyle.css">
		<link rel="stylesheet" href="http://localhost/StyleSheets/ContactStyle.css">
		<title>Contact Me</title>
	</head>

	<body>
		<?php 
			include("Includes/Header.php"); 
		?>
		<h1>Contact me!</h1>
		<!-- Simple form that submits to my database using the POST method -->
		<form action = "http://localhost/Contact.php" method = "POST">
			<table>
				<tr>
					<td>First name* : </td>
					<td><input type = "text" name = "Fname" size = "30" /> </td>
				</tr>
				
				<tr>
					<td>Last name* : </td>
					<td><input type = "text" name = "Lname" size = "30" /> </td>
				</tr>
			
				<tr>
					<td>Company/Organization: </td>
					<td><input type = "text" name = "Company" size = "30" /> </td>
				</tr>
				
				<tr>
					<td>Preferred Method of Contact: </td>
					<td>
						<select name = "Contact">
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
				
				<tr>
					<td>Reason for contact* : </td>
					<td>
						<select name = "Reason">
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
				<!-- Large text box for additional comments to my form -->
					<td>Additional Comments</td>
					<td><textarea name="Comments" cols = "30" rows = "5"></textarea></td>
				</tr>
				
				<!--Button to submit the form -->
				<tr>
					<td colspan = "2" style = "text-align: center"> <input type = "submit" id = "sub" value = "Enter!" /> </td>
				</tr>
				
				<!-- Reminder that some of the elements in the form are required and some are not -->
				<tr>
					<td colspan = "2" style = "text-align: center">Note: * denotes required field</td>
				</tr>
			
			</table>
			
		<?php
			//processing the submitted form. first tests to see if the form has been submitted yet
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				//tests to see if the required fields have been input. Otherwise, the form will not be processed
				if($_POST["Fname"] == "" or $_POST["Lname"] == "")	
				{
					echo "<p><center style=\"color:red\">Nice try, but you <b>MUST</b> fill out all required fields. Please try again.</center></p>";
				}
				else
				{
					//connecting to database
					$db = new mysqli("localhost", "root", "", "sitebase");
					if(mysqli_connect_errno())
					{
						printf("Connect failed: %s <br/>", mysqli_connect_error());
						exit();
					}
					//initializes query string. Builds on to it based on form information
					$query = "INSERT INTO ContactMe(";
					$keys = array_keys($_POST);
					//Only adds a field to the query if that part of the form had information entered
					foreach($keys as $key)
					{
						if($_POST[$key] !== "")
						{
							$query .= $key.",";	
						}
					}
					//removes extra comma from query and prepares it for the values to be entered from the form
					$query = substr($query, 0, strlen($query)-1);
					$query .= ") VALUES(";
					
					//adds all values from the form into the query
					foreach($_POST as $data)
					{
						if($data !== "")
						{
							$query .= " \"$data\",";
						}
					}
					//again removes the extra comma and finalizes query for the database
					$query = substr($query, 0, strlen($query)-1);
					$query .= ")";
					if(!mysqli_query($db, $query))
					{
						echo "INSERT into failed".$db->error;
					}
					
					//cookie used to greet the user if they submit the form and go back to the homepage
					$daysBeforeExpires = 90;
					$secondsPerDay = 86400;
					$expirationDate = $daysBeforeExpires * $secondsPerDay + time();
					$name = $_POST["Fname"]." ".$_POST["Lname"];
					setcookie("Username",$name, $expirationDate);
				}
			}
		?>
	</body>

</html>