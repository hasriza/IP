<?php
	require_once "cred.php";

	if(isset($_POST['compbtn'])){
		$dname=mysqli_escape_string($conn, $_POST['dname']);
		$dquant=mysqli_escape_string($conn, $_POST['dquant']);
		$dtype=mysqli_escape_string($conn, $_POST['dtype']);

		$stmt=mysqli_stmt_init($conn);
		$query="select id from tetrauser where username=?";
		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Connection error!".mysqli_error($conn));
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $dname);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result)){
				$did=$row['id'];
				$query1="insert into delivery(dcomp_id, del_quantity, del_type) values(?, ?, ?)";
				if(!mysqli_stmt_prepare($stmt, $query1)){
					die("Connection error!");
				}
				else{
					mysqli_stmt_bind_param($stmt, "iss", $did, $dquant ,$dtype);
					mysqli_stmt_execute($stmt);
					header("Location: ../IP/company.php");
			}
		}			
		}
	}
	else{
		header("Location: ../IP/company.php");
		exit();
	}
?>