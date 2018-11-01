<?php
	require_once "cred.php";

	if(isset($_POST['startcamp'])){
		$cname=mysqli_escape_string($conn, $_POST['cname']);
		$cloc=mysqli_escape_string($conn, $_POST['cloc']);
		$cdate=mysqli_escape_string($conn, $_POST['cdate']);
		$cmonth=mysqli_escape_string($conn, $_POST['cmonth']);
		$cyear=mysqli_escape_string($conn, $_POST['cyear']);
		$ctime=mysqli_escape_string($conn, $_POST['ctime']);		
		$cdesc=mysqli_escape_string($conn, $_POST['cdesc']);
		$cnumb=mysqli_escape_string($conn, $_POST['cnumb']);
		$date_value="$cyear/$cmonth/$cdate";
		echo $date_value;

		$stmt=mysqli_stmt_init($conn);
		$query="insert into campaign(cname, cloc, cdate, ctime, cdesc, cnumb)values(?,?,?,?,?,?);";
		if(!mysqli_stmt_prepare($stmt, $query)){
			die("Error!");
		}
		else{
			mysqli_stmt_bind_param($stmt, "ssssss", $cname, $cloc, $date_value, $ctime, $cdesc, $cnumb);
			mysqli_stmt_execute($stmt);
			header("Location: ../IP/volunteerlogin.php");
		}
	}
	else{
		header("Location: ../IP/volunteerlogin.php");
		exit();
	}
?>