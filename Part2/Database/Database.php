<?php
//processing the submitted form. first tests to see if the form has been submitted yet
	if($_SERVER["REQUEST_METHOD"] == "POST")
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
		echo "true";
	}
	else
	{
		echo "false";
	}
			
		?>