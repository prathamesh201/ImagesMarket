<?php

	// Database (DB) information here
	$servername = "localhost";
	$username = "prathamesh201";
	$password = "Prathamesh@7447";
	$dbname = "login";
	
	//Create and check db connection
	$conn = mysqli_connect("localhost", "root", "", "imagemart");
	
	//To check if the connection has been interupted
	if($conn === false){
		die("Error: Could not connect. " . mysqli_connect_error());
	}
	
	//Creating the variables
	$First_Name = $_REQUEST['First_Name'];
	$Last_Name = $_REQUEST['Last_Name'];
	$Email_id = $_REQUEST['Email_id'];
	$Password = $_REQUEST['Password'];
	$Re_Enter_Password = $_REQUEST['Re_Enter_Password'];
	
	//Creating sql string
	
	$sql = "INSERT INTO imagemart VALUES('$First_Name', '$Last_Name', '$Email_id', '$Password', '$Re_Enter_Password')";
	
	//Send query, and check to ensure there is no error_get_last
	
	if(mysqli_query($conn, $sql)){
		echo "Record inserted successfully!";
		echo nl2br("\n$First_Name\n $Last_Name\n $Email_id");
	} else{
		echo "Error: Something went Wrong! $sql. " . mysqli_error($conn);
	}
	
	//Close DB connection
	mysqli_close($conn);
?>
