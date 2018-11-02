<?php
	require_once "cred.php";

	if(isset($_POST['prbtn'])){
		$prname=mysqli_escape_string($conn, $_POST['prname']);
		$prtype=mysqli_escape_string($conn, $_POST['prtype']);
		$prquant=mysqli_escape_string($conn, $_POST['prquant']);

		$stmt=mysqli_stmt_init($conn);
		$query="select id from tetrauser where username=?";
		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Connection error!".mysqli_error($conn));
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $prname);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result)){
				$prid=$row['id'];
				$query1="insert into product(prod_type, prod_quantity, pcomp_id) values(?, ?, ?)";
				if(!mysqli_stmt_prepare($stmt, $query1)){
					die("Connection error!");
				}
				else{
					mysqli_stmt_bind_param($stmt, "sis", $prtype, $prquant ,$prid);
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