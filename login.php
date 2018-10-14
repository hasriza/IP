<?php
	require_once('cred.php');
	$conn = mysqli_connect($id, $pass, $username, $db);
	if(!conn){
		echo "Connection Error";
	}
	else{
		echo "Connected!";
	}

	$name=mysqli_real_escape_string($_POST['name']);
	$pass=mysqli_real_escape_string($_POST['pass']);



	mysqli_close($conn)
?>