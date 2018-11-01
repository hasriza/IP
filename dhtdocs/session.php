<?php
	session_start();

	if(isset($_SESSION['uid'])){
		// Edit here to get the profile box
		echo "<form action='logout.php'>
		<button type='submit' name='logoutbttn' id='logout_btn' class='login'>Logout</button>
		</form>";
		if($_SESSION['role']=='donor'){
			echo"<section>		
				<button class='userbttn' id='dbt1'>Request Pickups</button>		
				<a  href='doncollection.php'><button class='userbttn' id='dbt2'>Collection Centers</button></a>
				
				</section>";
		}
	}
	else{		
		echo "<button class='login' id='login_btn'>Login</button>
		<button class='login' id='register_btn'>Register</button>";
	}

?>