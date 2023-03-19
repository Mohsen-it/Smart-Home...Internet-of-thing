<?php
include('connect.php');
	$query ="SELECT * from status";					// Select all data in table "status"
	$result = $conn->query($query);
	
		while($row = $result->fetch_assoc()) 
		{
			echo $row["status"];					// Echo data , equivalent with send data to esp
		}

?>