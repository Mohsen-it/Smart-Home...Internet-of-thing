<?php

$server 	= "127.0.0.1";	// Change this to correspond with your database port
$username 	= "root";			// Change if use webhost online
$password 	= "bsma2003";
$DB 		= "qlda";			// database name


$conn = new mysqli($server, $username, $password,$DB);		// Check database connection
	if ($conn->connect_error) 
	{
		//die("Connection failed: " . $conn->connect_error);
	} 
$conn->set_charset('UTF8');
mysqli_select_db($conn,$DB);
?>