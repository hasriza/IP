<?php
	if(isset($_POST['choose'])){
		require_once('cred.php');
		$query1='select id,username,auth from tetrauser where role=?'
		$query2='select id,username from tetrauser where role=?'
		$stmt=mysqli_stmt_init($conn);
		echo "<script>getElementById('user_det').style.setProperty('display','block');</script>"
		if($_POST['choose']=='company' || $_POST['choose']=='ngo')
		{	
			echo "<script>console.log('Working');</script>"
			if(!mysqli_stmt_prepare($stmt, $query1)){
			die("Prepare error".mysqli_error($conn));
			}
			else{
				echo "<script>getElementById('validate').style.setProperty('display','block');</script>"
				mysqli_stmt_bind_param($stmt, "s", $_POST['choose']);
				mysqli_stmt_execute($stmt);
				}	
		}
		else
		{
			echo "<script>console.log('Working');</script>"
			if(!mysqli_stmt_prepare($stmt, $query2)){
			die("Prepare error".mysqli_error($conn));
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $_POST['choose']);
				mysqli_stmt_execute($stmt);
			}
		}
	}
	else{
		header("Location: ../admin.php");
		exit();
	}
?>