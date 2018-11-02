<?php require "session.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>TetraFree | Campaign</title>
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
				echo "<button class='login' id='login_btn'>Login</button>
				<button class='login' id='register_btn'>Register</button>";
			}
		?>
	</section>
	<!-- Main header, common on all pages, replace h1 by logo -->
	<?php require "head.php" ?>
	<div id='section'>	

	<div class="container1" id="newcamp">
		<div class="register">
			<form action="volcampaign.php" method="POST">
				<span class="close" id="close_btn23">&times;</span>
				<header>
					<h2>Start A Campaign</h2>
				</header>
				<div>
					<input type="text" placeholder="Username" name="cname" size=35>
				</div>

				<div>
					<input type="text" placeholder="Location" name="cloc" size=35>
				</div>

				<div>
					<label>Date</label>
					<div class="voldate">
						<select name="cdate">
							<option disabled selected>Day</option>
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
							<option value=6>6</option>
							<option value=7>7</option>
							<option value=8>8</option>
							<option value=9>9</option>
							<option value=10>10</option>
							<option value=11>11</option>
							<option value=12>12</option>
							<option value=13>13</option>
							<option value=14>14</option>
							<option value=15>15</option>
							<option value=16>16</option>
							<option value=17>17</option>
							<option value=18>18</option>
							<option value=19>19</option>
							<option value=20>20</option>
							<option value=21>21</option>
							<option value=22>22</option>
							<option value=23>23</option>
							<option value=24>24</option>
							<option value=25>25</option>
							<option value=26>26</option>
							<option value=27>27</option>
							<option value=28>28</option>
							<option value=29>29</option>
							<option value=30>30</option>
							<option value=31>31</option>
						</select>
						<select name="cmonth">
							<option disabled selected>Month</option>
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>	
						<select name="cyear">							
							<option selected disabled>Year</option>
							<?php
								for($i=0;$i<=2;$i++){
									$year=date('Y',strtotime("last day of +$i year"));
									echo "<option value='$year'>$year</option>";
								}
							?>
						</select>
					</div>				
				</div>

				<div>
					<input type="text" placeholder="Time" name="ctime" size=35>
				</div>

				<div>
					<textarea rows="4" cols="70" name="cdesc" placeholder="Brief Description"></textarea>
				</div>

				<div>
					<input type="text" placeholder="Contact Details" name="cnumb" size=35>
				</div>

				<div>
					<input type="submit" name="startcamp" class="sub">
				</div>

			</form>
		</div>
	</div>

	<section>		
		<!-- <a href="joincamp.php"><button class="userbttn" id="vol1">Join A Campaign</button></a> -->
		<button class="userbttn" id="vol2">Start A Campaign</button>
	</section>
<?php require "foot.php" ?>
	<script src="scripts/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/volunteer.js"></script>
</body>
</html>