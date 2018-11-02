<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Company profile</title>
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
				// echo "<section class='logBlock'>Hello ,<br>".$_SESSION['uname']."</section>";
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

	<div class="container1" id="comp_cont">
		<div class="register">
			<form action="companydb.php" method="POST">
				<span class="close" id="close_btn45">&times;</span>
				<header>
					<h2>Request For Cartons</h2>
				</header>
				
				<div>
					<input type="text" placeholder="Username" name="dname" size="35">
				</div>

				<div>
					<label>Type</label>
					<input type="radio" name="dtype" value="50d">50% Recyclable</input>
					<input type="radio" name="dtype" value="100d">100% Recyclable</input>
				</div>

				<div>
					<input placeholder="Quantity" type="text" name="dquant" size="35">
				</div>

				<div>
					<input type="submit" name="compbtn" class="sub">
				</div>

			</form>
		</div>
	</div>

	<div class="container1" id="prod_cont">
		<div class="register">
			<form action="productdb.php" method="POST">
				<span class="close" id="close_btn90">&times;</span>
				<header>
					<h2>Update Products</h2>
				</header>
				
				<div>
					<input type="text" placeholder="Username" name="prname" size="35">
				</div>

				<div>
					<label>Type</label>
					<input type="radio" name="prtype" value="books">Books</input>
					<input type="radio" name="prtype" value="benches">Benches</input>
					<input type="radio" name="prtype" value="roofs">Roofs</input>
				</div>

				<div>
					<input placeholder="Quantity" type="text" name="prquant" size="35">
				</div>

				<div>
					<input type="submit" name="prbtn" class="sub">
				</div>

			</form>
		</div>
	</div>

	<section>	
		<button class="userbttn" id="compbt">Request For Cartons</button>
		<button class="userbttn" id="prodbt">Update Products</button>
	</section>

	<script type="text/javascript" src="scripts/company.js"></script>
</body>
</html>