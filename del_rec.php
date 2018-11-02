<?php
	if(isset($_POST['id']))
	{
		require_once('cred.php');
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		else{
			mysqli_query($conn,"delete from tetrauser where id = ".$_POST['id']);
		}
	}
	else{
		header("Location: ../admin.php");
		exit();
	}
?>