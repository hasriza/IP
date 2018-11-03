<?php
	if(isset($_SESSION['role']) == "ngo"){

	}
	else{
		echo "<h1>Sorry, only NGO can place order for products!</h1>";
	}
?>