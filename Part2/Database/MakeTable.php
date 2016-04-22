<!DOCTYPE html>
<html>
<?php
	$db = new mysqli("localhost", "root", "");
	
	if(!$db)
	{
		printf("Connect failed: %s <br/>", $db->error);
		exit();
	}
	
	$query = "CREATE DATABASE IF NOT EXISTS sitebase";
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
	
	$query = "DROP TABLE IF EXISTS ContactMe";
	
	if(!$db->query($query))
	{
		echo "Failed to delete old table " . $db->error;
	}
	
	$query = "CREATE TABLE ContactMe (
			Fname text NOT NULL, 
			Lname text NOT NULL, 
			Company text, 
			Contact text, 
			Email text, 
			Phone text, 
			Mail text,
			Telegraph text,
			Pidgeon text,
			Reason text NOT NULL, 
			Description text,
			Comments text)";
	
	if(!$db->query($query))
	{
		echo "Failed to make main table " . $db->error;
	}
	
	$db->close();
	echo "no errors!";
?>

</html>