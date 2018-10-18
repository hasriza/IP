<?php
	/*Connect to server*/
	$user = 'user';
	$pass = 'tetrapass'; 
	$host= 'localhost';
	$db = 'tetrafree';
 	
 	$conn=mysqli_connect($host, $user, $pass, $db);

	if(!$conn)
		die("Error".mysqli_connect_error($conn));

