<!DOCTYPE html>
<html>

<p>Data base created!</p>

<?php
	$db = new mysqli("localhost", "root", "");
	
	if(!$db)
	{
		printf("Connect failed: %s <br/>", $db->error);
		exit();
	}
	
	$query = "CREATE DATABASE newBase";
	if(!$db->query($query))
	{
		echo "Failed to create new database " . $db->error;
	}
	$db->close();
	
	$db = new mysqli("localhost", "root", "", "newbase");
	
	if(!$db)
	{
		echo "Connect failed: " .$db->error;
	}
	
	$query = "CREATE TABLE People (
	Fname CHAR(25) NOT NULL, 
	Lname CHAR(25) NOT NULL)";
	if(!$db->query($query))
	{
		echo "Failed to make table " . $db->error;
	}
	
	$db->close();
?>

</html>