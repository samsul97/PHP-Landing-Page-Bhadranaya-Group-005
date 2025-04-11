<?php





	$servername = "localhost";

	$username = "bhadrana_ultah";

	$password = "adminholycow";

	$dbname = "bhadrana_ultah";



	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {

	  die("Connection failed: " . $conn->connect_error);

	}



