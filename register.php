<?php
	require_once "cred.php";
	$conn=mysqli_connect($host, $user, $pass, $db);

	if(! $conn){
		echo "Not Connected!";
	}
	else{
		echo "Connected!";
	}

	if(isset($_POST['sub'])){
		/*Get all the values */		
		$name=mysqli_escape_string($conn, $_POST["name"]);
		$numb=mysqli_escape_string($conn, $_POST["numb"]);
		$add=mysqli_escape_string($conn, $_POST["add"]);
		$email=mysqli_escape_string($conn , $_POST["email"]);
		$join=mysqli_escape_string($conn, $_POST["join"]);
		$uname=mysqli_escape_string($conn, $_POST["uname"]);
		$pass=mysqli_escape_string($conn, $_POST["pass"]);

		//Insert query 
		if($join=="donor"){
			$query1="Insert into donor(d_name, d_numb, d_add, d_email, d_user, d_pass) values('$name', '$numb', '$add', '$email', '$uname', '$pass');";
			if(mysqli_query($conn, $query1)){
				echo "Successfully Inserted!";
			}
			else{
				echo "Oops! There was some issue.";
			}

			$query2="insert into user(name, pass) values('$uname', '$pass');";
			if(mysqli_query($conn, $query2)){
				echo "Successfully Inserted in user!";
			}
			else{
				echo "Oops! There was some issue in inserting in user.";
			}
		}
		else if($join=="delivery"){
			$query1="Insert into worker(w_name, w_numb, w_add, w_email, w_user, w_pass) values('$name', '$numb', '$add', '$email', 'uname', 'pass');";
			if(mysqli_query($conn, $query1)){
				echo "Successfully Inserted!";
			}
			else{
				echo "Oops! There was some issue.";
			}

			$query2="insert into user(name, pass) values('$uname', '$pass');";
			if(mysqli_query($conn, $query2)){
				echo "Successfully Inserted in user!";
			}
			else{
				echo "Oops! There was some issue in inserting in user.";
			}
		}
		else if($join=="company"){
			$query1="Insert into company(c_name, c_numb, c_add, c_email, c_user, c_pass) values('$name', '$numb', '$add', '$email', 'uname', 'pass');";
			if(mysqli_query($conn, $query1)){
				echo "Successfully Inserted!";
			}
			else{
				echo "Oops! There was some issue.";
			}

			$query2="insert into user(name, pass) values('$uname', '$pass');";
			if(mysqli_query($conn, $query2)){
				echo "Successfully Inserted in user!";
			}
			else{
				echo "Oops! There was some issue in inserting in user.";
			}		
		}
		else if($join=="volunteer"){
			$query1="Insert into volunteer(v_name, v_numb, v_add, v_email, v_user, v_pass) values('$name', '$numb', '$add', '$email', 'uname', 'pass');";
			if(mysqli_query($conn, $query1)){
				echo "Successfully Inserted!";
			}
			else{
				echo "Oops! There was some issue.";
			}

			$query2="insert into user(name, pass) values('$uname', '$pass');";
			if(mysqli_query($conn, $query2)){
				echo "Successfully Inserted in user!";
			}
			else{
				echo "Oops! There was some issue in inserting in user.";
			}			
		}
		else{
			$query1="Insert into sponsor(s_name, s_numb, s_add, s_email, s_user, s_pass) values('$name', '$numb', '$add', '$email', 'uname', 'pass');";
			if(mysqli_query($conn, $query1)){
				echo "Successfully Inserted!";
			}
			else{
				echo "Oops! There was some issue.";
			}

			$query2="insert into user(name, pass) values('$uname', '$pass');";
			if(mysqli_query($conn, $query2)){
				echo "Successfully Inserted in user!";
			}
			else{
				echo "Oops! There was some issue in inserting in user.";
			}		
		}
		
	}



	mysqli_close($conn);

?>