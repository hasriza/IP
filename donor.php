<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Home</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
</head>
<body>
	<?php
		if(isset($_SESSION['uid'])){
			// Edit here to get the profile box
			echo "<form action='logout.php'>
			<button type='submit' name='logoutbttn' id='logout_btn' class='login'>Logout</button>
			</form>";
		}
		else{
			header("Location: ../IP/index.php");		
			echo "<button class='login' id='login_btn'>Login</button>
			<button class='login' id='register_btn'>Register</button>";
		}
	?>

	<!-- Main header, common on all pages, replace h1 by logo -->
	<?php require "head.php" ?>
	<div id='section'>

	<div class="container1" id="reqpick">
		<div class="register">
			<form action="donpickupdb.php" method="POST">
				<span class="close" id="close_btn2">&times;</span>

				<h1>Request Pickup</h1>
				<div>
					<input type="text" placeholder="Username or Email" name="pname">
				</div>

				<div>
					<input type="text" placeholder="Quantity To Be Collected" name="quant">
				</div>

				<div>
					<label>Type</label>
					<input type="radio" name="pick_type" value="50">50% Recyclable</input>
					<input type="radio" name="pick_type" value="100">100% Recyclable</input>
				</div>

				<div>
					<input type="submit" class="sub" name="picksub">
				</div>
			</form>
		</div>
	</div>
		
	<!-- <div class="container1" id="donlogs">
		<div class="register">
			<span class="close" id="close_btn1">&times;</span>
			<h1>Logs</h1>
			<?php

				// require_once "cred.php";

				// $stmt=mysqli_stmt_init($conn);
				// $query = "select c.type, c.quantity
				// 		  from carton as c
				// 		  inner join tetrauser as t
				// 		  on c.don_id=(
				// 		  select id
				// 		  from tetrauser
				// 		  where name=?)";

				// $name=$_SESSION['uname'];

				// if(!mysqli_stmt_prepare($stmt, $query)){
				// 	die("Select Error!");
				// }
				// else{
				// 	mysqli_stmt_bind_param($stmt, "s", $name);
				// 	mysqli_stmt_execute($stmt);
				// 	mysqli_stmt_bind_result($stmt, $x1, $x2);
				// 	while(mysqli_stmt_fetch($stmt)){
				// 		echo "<h3> <br> Quantity: $x1 <br> Type: $x2</h3>";
						
					//}
				//}
			?>
		</div>	
	</div> -->

	<section>		
		<button class="userbttn" id="dbt1">Request Pickups</button>		
		<a  href="doncollection.php"><button class="userbttn" id="dbt2">Collection Centers</button></a>
		<!-- <button class="userbttn" id="dbt3">Logs</button> -->
	</section>

	<script type="text/javascript" src="scripts/donor.js"></script>
</body>
</html>