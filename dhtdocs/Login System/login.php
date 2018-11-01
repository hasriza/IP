<?php
	
	if(isset($_POST['loginbttn'])){
		require_once('cred.php');

		$uname=mysqli_real_escape_string($conn, $_POST['lname']);
		$pass=mysqli_real_escape_string($conn, $_POST['lpass']);

		$query="select * from tetrauser where username=? or email=?;";
		$stmt=mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Prepare error".mysqli_error($conn));
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);
			mysqli_stmt_execute($stmt);
			//Use the output for various reasons, get_result -> fetch_assoc 
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result)){
				$dbpass = $row['password'];
				$check = password_verify($pass, $dbpass);
				if($check==false){
					echo "<script type='text/javascript'>alert('Incorrect Password!');</script>";	
				}
				else if($check==true){
						session_start();
						$_SESSION['uid'] = $row['id'];
						$_SESSION['uname'] = $row['name'];

						if($row['role']=='donor'){
							echo "Logged in!";
							header("Location: ../donor.php");
						}
						else if($row['role']=='volunteer'){
							echo "Logged in!";
							header("Location: ../volunteer.php");
						}
						else if($row['role']=='ngo'){
							echo "Logged in!";
							header("Location: ../ngo.php");
						}
				}
				else{
					echo "<script type='text/javascript'>alert('Something went wrong!');</script>";	
				}
			}
			else{
				echo "<script type='text/javascript'>alert('Invalid Username!');</script>";
			}
		}
	}
	else{
		header("Location:../loginSystem.php");
		exit();
	}

	mysqli_close($conn)
?>