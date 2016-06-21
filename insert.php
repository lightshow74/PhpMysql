<?php
	$servername = "localhost";
	$username = "josh";
	$password = "josh1234";
	$dbname = "webapp";

	// Create connection
	$con = mysqli_connect($servername, $username, $password, $dbname);
				
	// Check connection
	if($con === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	// Escape user inputs for security
	$first_name = mysqli_real_escape_string($con, $_POST['firstname']);
	$last_name = mysqli_real_escape_string($con, $_POST['lastname']);
	$medal = mysqli_real_escape_string($con, $_POST['medal']);
	$sport = mysqli_real_escape_string($con, $_POST['sport']);
	$event = mysqli_real_escape_string($con, $_POST['event']);
 
	// attempt insert query execution
	$sql = "INSERT INTO medalists (FirstName, LastName, Medal, Sport, Event) VALUES ('$first_name', '$last_name', '$medal', '$sport', '$event')";
	
	
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;

/* 	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	} */
 
// close connection
mysqli_close($con);
?>