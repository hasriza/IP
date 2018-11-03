<?php
		 
	if(isset($_POST['registerbttn'])){
		// Establishing connection with PHP
		require_once "cred.php";

		/*Creating Session Variable*/

		/*Get all the values */		
		$name=mysqli_escape_string($conn, $_POST["fname"]);
		$numb=mysqli_escape_string($conn, $_POST["numb"]);
		$add=mysqli_escape_string($conn, $_POST["add"]);
		$email=mysqli_escape_string($conn , $_POST["uemail"]);
		$join=mysqli_escape_string($conn, $_POST["join"]);
		$uname=mysqli_escape_string($conn, $_POST["uname"]);
		$pass=mysqli_escape_string($conn, password_hash($_POST["pass"], PASSWORD_DEFAULT));
		//Creating hash for email verification
		$hash=mysqli_escape_string($conn, md5(rand(5000,10000))); 

		//Using prepared statements - Statement run first and values attached later, prevents from SQL injection and reduces load of executing query everytime 
		//Preparing a template - Use ? instead of values.		
		$query="select username from tetrauser where username=?";
		//Intialize and prepare specific SQL statement
		$stmt=mysqli_stmt_init($conn);
		//Check if statement does not work
		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Error Intialize!"); 
		}
		else{
			//Binding parameters to statement, second argument can be - s, b(blob), i, d(double)
			//second argument depends on number of parameters
			mysqli_stmt_bind_param($stmt, "s", $uname);
			mysqli_stmt_execute($stmt);
			// When you want to use unm_rows, use store_result first!
			mysqli_stmt_store_result($stmt);
			$count= mysqli_stmt_num_rows($stmt);
			if($count>0){
				echo "<script type='text/javascript'>alert('Username already Taken!');</script>";
			}
			else{				
				$query= "Insert into tetrauser(name, contact, address, email, role, username, password, hash) values(?, ?, ?, ?, ?, ?, ?, ?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $query)){
					die("Error insert Intialize!".mysqli_error($conn)) ;
				}
				else{
					$msg = "Verification link sent to $email. Please follow the link.";
					//bcrypt used - Makers of PHP keep updating it everytime a decrypt is used
					mysqli_stmt_bind_param($stmt, "ssssssss", $name, $numb, $add, $email, $join, $uname, $pass, $hash);
					mysqli_stmt_execute($stmt);	
					header("Location: ../IP/index.php");
					exit();
				}
			}
		}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	}
	else{
		header("Location: ../IP/index.php");
		exit();
	}

?>