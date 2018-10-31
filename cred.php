<?php
	/*Connect to server*/
	$user = 'root';
	$pass = 'admin'; 
	$host= 'localhost';
	$db = 'tetrafree';
 	
 	$conn=mysqli_connect($host, $user, $pass, $db);

	if(!$conn)
		die("Error".mysqli_connect_error($conn));

?>