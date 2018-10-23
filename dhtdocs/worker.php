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

	<header>
		<h1>Pickups Cartons</h1>
	</header>

	<div class="pickups">
		
		<div class="pickup">
			<a href="www.google.com">
			<!--<img src=images/delivery_boy.jpg>-->
			<div class="pick_det">
				<p>Pickup Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>
		

		<div class="pickup">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="pick_det">
				<p>Pickup Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="pickup">
			<a href="www.google.com">
			<!--<img src=images/delivery_boy.jpg>-->
			<div class="pick_det">
				<p>Pickup Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="pickup">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="pick_det">
				<p>Pickup Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="pickup">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="pick_det">
				<p>Pickup Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>
	</div>

	<header>
		<h1>Deliver Cartons</h1>
	</header>

	<div class="delivers">
		
		<div class="deliver">
			<a href="www.google.com">
			<!--<img src=images/delivery_boy.jpg>-->
			<div class="del_det">
				<p>Delivery Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>
		

		<div class="deliver">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="pick_det">
				<p>Delivery Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="deliver">
			<a href="www.google.com">
			<!--<img src=images/delivery_boy.jpg>-->
			<div class="pick_det">
				<p>Delivery Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="deliver">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="pick_det">
				<p>Delivery Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="deliver">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="pick_det">
				<p>Delivery Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>
	</div>

	<header>
		<h1>Deliver Products</h1>
	</header>

	<div class="products">
		
		<div class="product">
			<a href="www.google.com">
			<!--<img src=images/delivery_boy.jpg>-->
			<div class="prod_det">
				<p>Product Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>
		

		<div class="product">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="prod_det">
				<p>Product Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="product">
			<a href="www.google.com">
			<!--<img src=images/delivery_boy.jpg>-->
			<div class="prod_det">
				<p>Product Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="product">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="prod_det">
				<p>Product Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>

		<div class="product">
			<a href="www.google.com">
			<!--<img src=images/delivery_girl.jpg>-->
			<div class="prod_det">
				<p>Product Details</p>
				<a href="@"><p>Quantity</p><p>Location</p></a>
			</div>
			</a>
		</div>
	</div>

	<script type="text/javascript" src="scripts/donor.js"></script>
</body>
</html>