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
						$_SESSION['role']=$row['role'];
						$_SESSION['user']=$row['username'];

						if($row['role']=='donor'){
							echo "Logged in!";
							header("Location: index.php");
						}
						else if($row['role']=='volunteer'){
							echo "Logged in!";
							header("Location: volunteerlogin.php");
						}
						else if($row['role']=='ngo'){
							echo "Logged in!";
<<<<<<< Updated upstream
							header("Location: ../IP/market.php");
=======
							header("Location: ngo.php");
>>>>>>> Stashed changes
						}
						else if($row['role']=='company'){
							echo("Logged in!");
							header("Location: company.php");
						}
						else if($row['role']=='delivery'){
							echo("Logged in!");
							header("Location: worker.php");
						}
						else if($row['role']=='admin'){
							echo("Logged in!");
							header("Location: admin.php");
						}
				}
				else{
					header("Location: index.php");	
					echo "<script type='text/javascript'>alert('Something went wrong!');</script>";	
				}
			}
			else{
				header("Location: index.php");	
				echo "<script type='text/javascript'>alert('Invalid Username!');</script>";
			}
		}
	}
	else{
		header("Location: index.php");
		exit();
	}

	mysqli_close($conn)
?>