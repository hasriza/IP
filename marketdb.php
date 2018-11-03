<?php
	require_once "cred.php";

	/*Books DB entry*/
	if(isset($_POST['bookbtn'])){
		
		$or_quant=mysqli_escape_string($conn, $_POST['or_quant']);

		$query = "select sum(prod_quantity) as prod_sum from product where prod_type='books'";
		$result=mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		
		if($row['prod_sum']>$or_quant){
			$ngoid=$_SESSION['uid'];
			$or_type="books";

			$stmt=mysqli_stmt_init($conn);
			$query1="insert into ngo_order(ngo_id, or_quant, or_type) values(?, ?, ?)";
			if(!mysqli_stmt_prepare($stmt, $query1)){
				die("Connection error!");
			}
			else{
				mysqli_stmt_bind_param($stmt, "iss", $ngoid, $or_quant ,$or_type);
				mysqli_stmt_execute($stmt);
				header("Location: ../IP/market.php");
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Sorry, Required Quantity Unavailable.'); window.location = './market.php';</script>";		
		}		
	}
	else{
		echo "<script type='text/javascript'>alert('There was some issue.'); window.location = './market.php';</script>";	
	}

	/*Benches DB entry*/
	if(isset($_POST['benchbtn'])){
		
		$or_quant=mysqli_escape_string($conn, $_POST['or_quant']);

		$query = "select sum(prod_quantity) as prod_sum from product where prod_type='benches'";
		$result=mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);

		if($row['prod_sum']>$or_quant){
			$ngoid=$_SESSION['uid'];
			$or_type="benches";

			$stmt=mysqli_stmt_init($conn);
			$query1="insert into ngo_order(ngo_id, or_quant, or_type) values(?, ?, ?)";
			if(!mysqli_stmt_prepare($stmt, $query1)){
				die("Connection error!");
			}
			else{
				mysqli_stmt_bind_param($stmt, "iss", $ngoid, $or_quant ,$or_type);
				mysqli_stmt_execute($stmt);
				header("Location: ../IP/market.php");
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Sorry, Required Quantity Unavailable!'); window.location = './market.php';</script>";		
		}		
	}
	else{
		echo "<script type='text/javascript'>alert('There was some issue.'); window.location = './market.php';</script>";	
	}	

	/*Roofs DB entry*/
	if(isset($_POST['roofbtn'])){
		
		$or_quant=mysqli_escape_string($conn, $_POST['or_quant']);

		$query = "select sum(prod_quantity) as prod_sum from product where prod_type='roofs'";
		$result=mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);

		if($row['prod_sum']>$or_quant){
			$ngoid=$_SESSION['uid'];
			$or_type="roofs";

			$stmt=mysqli_stmt_init($conn);
			$query1="insert into ngo_order(ngo_id, or_quant, or_type) values(?, ?, ?)";
			if(!mysqli_stmt_prepare($stmt, $query1)){
				die("Connection error!");
			}
			else{
				mysqli_stmt_bind_param($stmt, "iss", $ngoid, $or_quant ,$or_type);
				mysqli_stmt_execute($stmt);
				header("Location: ../IP/market.php");
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Sorry, Required Quantity Unavailable.'); window.location = './market.php';</script>";		
		}		
	}
	else{
		echo "<script type='text/javascript'>alert('There was some issue.'); window.location = './market.php';</script>";	
	}	
?>