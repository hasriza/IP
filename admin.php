<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Admin</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
			header("Location: index.php");		
			echo "<button class='login' id='login_btn'>Login</button>
			<button class='login' id='register_btn'>Register</button>";
		}
	?>

<?php require "head.php" ?>
	<section id="section">
	<div id="adm">
	<h1>Admin</h1>
	</div>
	<div id="push">
	<select id="admin_select" name='choose'>
	<option disabled selected="true">Select User</option>
	<option value='donor'>Donor</option>
	<option value='company'>Company</option>
	<option value='sponsor'>Sponsor</option>
	<option value='ngo'>NGO</option>
	<option value='delivery'>Delivery</option>
	<option value='volunteer'>Volunteer</option>
	</select>
</div>
</section>

</div>
<div id="data">			
</div>
	<?php require "foot.php" ?> 

<script src="scripts/script.js" type="text/javascript"></script>
<script src='scripts/admin.js' type="text/javascript"></script>
</body>
</html>