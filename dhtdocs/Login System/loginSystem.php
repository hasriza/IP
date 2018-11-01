<!-- Include this php statement in all the files, checks if user is logged in! -->
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Login</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<!--PHP code to check if user is logged in and display data accordingly!-->
	<?php
		if(isset($_SESSION['uid'])){
			// Edit here to get the profile box
			echo "<form action='logout.php'>
			<button type='submit' name='logoutbttn' id='logout_btn' class='login'>Logout</button>
			</form>";
		}
		else{
			echo "<button class='login' id='login_btn'>Login</button>
			<button class='login' id='register_btn'>Register</button>";
		}
	?>
	
		<!-- Form Modal-->
	<div id="f_cont" class="container1">
		<div class="register">
			<span class="close" id="close_btn">&times;</span>
			<header>
				<h2><a href="login.html">Login</a></h2>
			</header>
			
			<form action="register.php" method="POST" onsubmit="return validation();">

				<fieldset>
				<legend>OR</legend>
					
					<div>
						<input type="text" placeholder="Full Name" name="fname" autofocus="on" autocomplete="on" size=35 >
						<div id="error"></div>
					</div>
					<div class="error" id="nameerr">
						<p></p>
					</div>

					<div>
						<input type="text" placeholder="Phone Number" name="numb" autocomplete="on" size=35 >
					</div>
					<div class="error" id="contacterr">
						<p></p>
					</div>

					<div>
						<input type="text" placeholder="Address" name="add" size=35 autocomplete="on">
					</div>
					<div class="error" id="adderr">
						<p></p>
					</div>

					<div>
						<input type="text" placeholder="Email" name="uemail" size=35 autocomplete="on">
					</div>
					<div class="error" id="mailerr">
						<p></p>
					</div>

					<div>
						
						<select name="join" class="select_join">
							<option disabled value selected>Join As</option>
							<option value="donor">Donor</option>
							<option value="delivery">Delivery Personnel</option>
							<option value="company">Recycling Company</option>
							<option value="volunteer">Volunteer</option>
							<option value="ngo">NGO</option>							
						</select>
					</div>

					<div>
						<input type="text" placeholder="Username" name="uname" size=35 autocomplete="on" >
					</div>
					<div class="error" id="usererr">
						<p></p>
					</div>

					<div>
						<input type="Password" placeholder="Password" name="pass" size=35 >
					</div>
					<div class="error" id="passerr">
						<p></p>
					</div>

					<div>
						<input type="Password" placeholder="Confirm Password" name="cpass" size=35 >
					</div>
					<div class="error" id="conpasserr">
						<p></p>
					</div>

					<div>
						<input type="submit" name="registerbttn" class="sub">
					</div>

					<div id="check">
						<input type="checkbox" value="check" class="checkbox1" required

						>I agree to the Terms and Conditions and Privacy Policy.</input>
					</div>

				</fieldset>

			</form>
		</div>
	</div>
		<!-- Login Form -->
		<div id="l_cont" class="container2">
			<div class="register" id="adjust_login">
				<span class="close" id="close_btn1">&times;</span>
				<header>
					<h2><a href="register.html">Register</a></h2>
				</header>
				
				<form action="login.php", method="POST" class="forms">

					<fieldset>
						<legend>OR</legend>

							<div>
							    <input type="text" placeholder="Username or Email" name="lname" required>
							</div>

							<div>
								<input type="password" placeholder="Password" name="lpass" required>
							</div>

							<div>  
							    <button type="submit" name="loginbttn" class="sub">Login</button>
							</div>

					</fieldset>

				</form>
			</div>
		</div>
		
	</div>

	<script type="text/javascript" src="login.js"></script>
</body>
</html>