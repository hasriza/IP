<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | What We Do</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
</head>
<body>

	<!-- Main header, common on all pages, replace h1 by logo -->
	<?php require "head.php" ?>
	<!-- Form Modal-->
	<div id="f_cont" class="container">
		<div class="register">
			<span class="close" id="close_btn">&times;</span>
			<header>
				<h2><a href="login.html">Login</a></h2>
			</header>
			
			<form action="#", method="POST" class="forms" onsubmit="return validation();">

				<fieldset>
				<legend>OR</legend>

					<div class="form_elements">
						<input type="text" placeholder="Enter Name" name="fname" autofocus="on" autocomplete="on" size=35 >
						<div id="error"></div>
					</div>

					<div>
						<input type="text" placeholder="Enter Phone Number" name="numb" autocomplete="on" size=35 >
					</div>

					<div>
						<input type="text" placeholder="Enter Address" name="add" size=35 autocomplete="on">
					</div>

					<div>
						<input type="text" placeholder="Enter Email" name="uemail" size=35 autocomplete="on">
					</div>

					<div>
						
						<select name="join" class="select_join">
							<option>-- Join As --</option>
							<option value="donor">Donor</option>
							<option value="delivery">Delivery Personnel</option>
							<option value="company">Recycling Company</option>
							<option value="volunteer">Volunteer</option>
							<option value="sponsor">Sponsor</option>
						</select>
					</div>

					<div>
						<input type="text" placeholder="Enter Username" name="uname" size=35 autocomplete="on" >
					</div>

					<div>
						<input type="Password" placeholder="Enter Password" name="pass" size=35 >
					</div>

					<div>
						<input type="Password" placeholder="Confirm Password" name="cpass" size=35 >
					</div>

					<div>
						<input type="submit" name="sub" class="sub" value="Register">
					</div>

					<div id="check">
						<input type="checkbox" value="check" class="checkbox1">I agree to the Terms and Conditions and Privacy Policy.</input>
					</div>

				</fieldset>

			</form>
		</div>
	</div>
<div id="section">
	<section class="outer", id="whatwedo">
		<header>
			<h2 class="hd"> What We Do </h1>
		</header>

		<section id="process">
			<img src="images/what_we_do.jpg">
		</section>
	</section>
</div>

	<?php require "foot.php" ?>
	
<script src="scripts/script.js" type="text/javascript"></script>
</body>
</html>
