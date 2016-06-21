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
	$id = mysqli_real_escape_string($con, $_GET['id']);
 
	// attempt insert query execution
	//$sql = "INSERT INTO medalists (FirstName, LastName, Medal, Sport, Event) VALUES ('$first_name', '$last_name', '$medal', '$sport', '$event')";
	
	$sql = "DELETE * FROM medalists WHERE ID = $id";
	
	echo $id;
	
	/*if (isset($_POST['delete'])){
		$query = $db->prepare (DELETE * FROM medalists WHERE ID = ?)
		$query->execute($id);
		header("Location: index.php");
	}
*/
 /*	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
		header("Location: index.php");
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
	*/
 
// close connection
mysqli_close($con);
?>