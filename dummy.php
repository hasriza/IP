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

	<?php
		include "cred.php";
		$query= "select * from carton where pick_status=1 and don_id='{$_SESSION['uid']}'";
		$result=mysqli_query($conn, $query);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result)){
				echo "Your pickup of ". $row['quantity']." cartons has been scheduled!";
			}
		}
		else{
			echo "No new notifications!";
		}
	?>

	<?php require "head.php" ?>
	<div id='section'>	

	<?php
		include "cred.php";
		$query= "select * from delivery where del_status=1 and dcomp_id='{$_SESSION['uid']}'";
		$result=mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
		echo($count);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result)){
				echo "Your delivery of ". $row['del_quantity']." cartons has been scheduled!";
			}
		}
		else{
			echo "No new notifications!";
		}
	?>

	<?php require "head.php" ?>
	<div id='section'>	

	<?php
		include "cred.php";
		$query= "select * from ngo_order where ord_status=1 and dcomp_id='{$_SESSION['uid']}'";
		$result=mysqli_query($conn, $query);
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result)){
				echo $row['c_id']." 	". $row['quantity']." 	". $row['type'];
			}
		}
		else{
			echo "No new notifications!";
		}
	?>

<?php require "foot.php" ?>
	<script src="scripts/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/ngo.js"></script>
</body>
</html>