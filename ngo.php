<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | NGO</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
</head>
<body>
	<section>
		<?php
			if(isset($_SESSION['uid'])){
				// Edit here to get the profile box
				echo "<section class='logBlock'>Hello ,<br>".$_SESSION['uname']."</section>";
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
	</section>

	<!-- Main header, common on all pages, replace h1 by logo -->
	<?php require "head.php" ?>
	<div id='section'>	

	<div class="container1" id="ngo_cont">
		<div class="register">
			<form action="ngodb.php" method="POST">
				<span class="close" id="close_btn">&times;</span>
				<header>
					<h2>Place an Order</h2>
				</header>
				
				<div>
					<input type="text" placeholder="Username" name="oname" size="35">
				</div>

				<div>
					<label>	Product Required</label>
					<input type="radio" name="ord_product" value="roof">Roofs</input>
					<input type="radio" name="ord_product" value="bench">Benches</input>
					<input type="radio" name="ord_product" value="book">Books</input>
				</div>

				<div>
					<input placeholder="Quantity" type="text" name="oquant" size="35">
				</div>

				<div>
					<input type="submit" name="ngobtn" class="sub">
				</div>

			</form>
		</div>
	</div>

	<section>	
		<button class="userbttn" id="ngobt">Request For Products</button>
	</section>

	<script type="text/javascript" src="scripts/ngo.js"></script>
</body>
</html>