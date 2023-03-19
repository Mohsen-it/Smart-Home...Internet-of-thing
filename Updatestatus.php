<?php

include('../connect.php');

$Stt = $_POST["status"];		// Get data with variable is "status" sending from Android App 
			
			if($Stt == 1)								// If data == 1 
			{
				$sql = "UPDATE status SET status = 1";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "1";								// Echo "1" , equivalent with send data to App to toast ON
			} 
			} 
			
			if($Stt == 0)								// If data == 1 
			{
				$sql = "UPDATE status SET status = 0";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "0";								// Echo "1" , equivalent with send data to App to toast ON
			} 
			} 
				
			else if ($Stt == 2)							// If data == 0 
			{
				$sql = "UPDATE status SET status = 2";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "2";								// Echo "0" , equivalent with send data to App to toast OFF
			} 
	
			} 
			if($Stt == 3)								// If data == 1 
			{
				$sql = "UPDATE status SET status = 3";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "3";								// Echo "1" , equivalent with send data to App to toast ON
			} 
			} 
				
			else if ($Stt == 4)							// If data == 0 
			{
				$sql = "UPDATE status SET status = 4";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "4";								// Echo "0" , equivalent with send data to App to toast OFF
			} 
	
			} 
			if($Stt == 5)								// If data == 1 
			{
				$sql = "UPDATE status SET status = 5";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "5";								// Echo "1" , equivalent with send data to App to toast ON
			} 
			} 
				
			else if ($Stt == 6)							// If data == 0 
			{
				$sql = "UPDATE status SET status = 6";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "6";								// Echo "0" , equivalent with send data to App to toast OFF
			} 
	
			} 
			if($Stt == 7)								// If data == 1 
			{
				$sql = "UPDATE status SET status = 7";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "7";								// Echo "1" , equivalent with send data to App to toast ON
			} 
			} 
				
			else if ($Stt == 8)							// If data == 0 
			{
				$sql = "UPDATE status SET status = 8";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "8";								// Echo "0" , equivalent with send data to App to toast OFF
			} 
			} 	
			else if ($Stt == 9)							// If data == 0 
			{
				$sql = "UPDATE status SET status = 9";	// Update present status to database
			if ($update->query($sql) === TRUE) {		// If don't put this If , we can't change the value in database
				echo "9";								// Echo "0" , equivalent with send data to App to toast OFF
			} 
	
			} 
?>