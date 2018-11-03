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

	<div class="pickups">

		<?php
			include "cred.php";

			echo "<h1>Pickups Cartons</h1>";

			$query="Select don_id, type, quantity from carton where pick_status=0;";
			$result=mysqli_query($conn, $query);
			// $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
			// var_dump($row);
			while($row=mysqli_fetch_assoc($result)){
				$did=$row['don_id'];
				$dtype=$row['type'];
				$dquantity=$row['quantity'];
				$query1="Select name, contact, address from tetrauser where id=$did";
				$result1=mysqli_query($conn, $query1);
				$row1=mysqli_fetch_assoc($result1);
				$pname=$row1['name'];
				$paddress=$row1['address'];
				$pcontact=$row1['contact'];
				echo "<div class='pickup'>
						<a href='pickup_details.php'>
						<div class='pick_det'>
							<p>Pickup Details</p>
							<a href='pickup_details.php'><p>Name - $pname </p> <p> Location - $paddress </p> <p> Number - $pcontact <p> Quantity - $dquantity </p> <p> Type - $dtype</p>
							<button class='pickupbtn'>Submit</button>
						</div>
						</a>
					</div>";
			}

			echo "<h1>Deliver Cartons</h1>";

			$queryd="Select dcomp_id, del_type, del_quantity from delivery where del_status=0;";
			$resultd=mysqli_query($conn, $queryd);
			// $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
			// var_dump($row);
			while($rowd=mysqli_fetch_assoc($resultd)){
				$dcompid=$rowd['dcomp_id'];
				$deltype=$rowd['del_type'];
				$delquantity=$rowd['del_quantity'];
				$queryd1="Select name, contact, address from tetrauser where id=$dcompid";
				$resultd1=mysqli_query($conn, $queryd1);
				$rowd1=mysqli_fetch_assoc($resultd1);
				$dname=$rowd1['name'];
				$daddress=$rowd1['address'];
				$dcontact=$rowd1['contact'];
				echo "<div class='deliver'>
						<a href='delivery_details.php'>
						<div class='pick_det'>
							<p>Delivery Details</p>
							<a href='pickup_details.php'><p>Quantity - $delquantity</p><p>Location - 
								$daddress</p></a>
						</div>
						</a>
					</div>";
			}
			
			echo "<h1>Deliver Products</h1>";
			$queryn="Select ngo_id, or_quant from ngo_order where ord_status=0;";
			$resultn=mysqli_query($conn, $queryn);
			while($rown=mysqli_fetch_assoc($resultn)){
				$ngoid=$rown['ngo_id'];
				$orquant=$rown['or_quant'];
				$queryn1="Select name, contact, address from tetrauser where id=$ngoid";
				$resultn1=mysqli_query($conn, $queryn1);
				$rown1=mysqli_fetch_assoc($resultn1);
				$nname=$rown1['name'];
				$naddress=$rown1['address'];
				$ncontact=$rown1['contact'];
				echo "<div class='product'>
						<a href='delivery_details.php'>
						<div class='pick_det'>
							<p>Product Details</p>
							<a href='pickup_details.php'><p>Quantity - $orquant</p><p>Location - 
								$naddress</p></a>
						</div>
						</a>
					</div>";
			}

		?>	


	<?php require "foot.php" ?>
	<script src="scripts/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/donor.js"></script>
</body>
</html>