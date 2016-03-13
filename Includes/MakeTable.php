<!DOCTYPE html>
<html>
<?php
	$db = new mysqli("localhost", "root", "");
	
	if(!$db)
	{
		printf("Connect failed: %s <br/>", $db->error);
		exit();
	}
	
	$query = "CREATE DATABASE sitebase";
	if(!$db->query($query))
	{
		echo "Failed to create new database " . $db->error;
	}
	$db->close();
	
	$db = new mysqli("localhost", "root", "", "sitebase");
	
	if(!$db)
	{
		echo "Connect failed: " .$db->error;
	}
	
	$query = "CREATE TABLE ContactMe (
	Fname CHAR(30) NOT NULL, 
	Lname CHAR(30) NOT NULL,
	Company CHAR(30),
	Contact CHAR(30),
	Reason CHAR(30) NOT NULL,
	Comments CHAR(150) )";
	if(!$db->query($query))
	{
		echo "Failed to make table " . $db->error;
	}
	
	$db->close();
?>

</html>