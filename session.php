<?php
	session_start();

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