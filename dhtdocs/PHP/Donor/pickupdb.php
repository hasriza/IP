<?php
	if(isset($_POST['picksub'])){

		require_once "cred.php";

		$pname=mysqli_escape_string($conn, $_POST["pname"]);
		$quant=mysqli_escape_string($conn, $_POST["quant"]);
		$pick_type=mysqli_escape_string($conn, $_POST["pick_type"]);

		$query = "select * from tetrauser where username=?";
		$stmt=mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Connection Error!");
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $pname);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result)){
				$contact=$row['contact'];
				$address=$row['address'];
				$don_id=$row['id'];

				$query1="insert into carton(quantity, type, don_id) values(?, ?, ?)";
				if(!mysqli_stmt_prepare($stmt, $query1)){
					die("Insert error");
				}
				else{
					mysqli_stmt_bind_param($stmt, "sss", $quant, $pick_type, $don_id);
					mysqli_stmt_execute($stmt);
					header("Location: ../donor.php");
				}
			}
			else{
				die("Error!");
			}
		}
		// $query="insert into tetrauser() values();";
	}
	else{
		header("Location: ../donor.php");
		exit();
	}

?>