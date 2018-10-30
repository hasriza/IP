<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Admin</title>
	<link rel="stylesheet" href="style/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Recycling TetraPack cartons into finished products">
	<meta name="keywords" content="Recycle, TetraPack, TetraPack Benches">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php require "head.php" ?>
	<section id="section">
	<h1 id='adm'>Admin</h1>
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
<div class="user_det">

	<table cellspacing="2" border="1">
		<tr>
			<th>UID</th>
			<th>Username</th>
			<th id='validate'>Validate</th>
			<th id='valacc'>Accept</th>
			<th>Remove</th>
		</tr>
		<div id="data">			
		</div>
	</table>
</div>
			</section>
	<?php require "foot.php" ?>

<script src="scripts/script.js" type="text/javascript"></script>
<script src='scripts/admin.js' type="text/javascript"></script>
</body>
</html>