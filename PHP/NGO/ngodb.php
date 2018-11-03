<?php
	require_once "cred.php";

	if(isset($_POST['ngobtn'])){
		$oname=mysqli_escape_string($conn, $_POST['oname']);
		$ordprod=mysqli_escape_string($conn, $_POST['ord_product']);
		$oquant=mysqli_escape_string($conn, $_POST['oquant']);

		$stmt=mysqli_stmt_init($conn);
		$query="select id from tetrauser where username=?";
		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Connection error!".mysqli_error($conn));
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $oname);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result)){
				$oid=$row['id'];
				$query1="insert into ngo_order(ngo_id, or_quant, or_type) values(?, ?, ?)";
				if(!mysqli_stmt_prepare($stmt, $query1)){
					die("Connection error!");
				}
				else{
					mysqli_stmt_bind_param($stmt, "iss", $oid, $oquant ,$ordprod);
					mysqli_stmt_execute($stmt);
					header("Location: ../ngo.php");
			}
		}			
		}
	}
	else{
		header("Location: ../ngo.php");
		exit();
	}
?>