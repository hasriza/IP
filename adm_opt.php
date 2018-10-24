<?php
	if(isset($_POST['val'])){
		require_once('cred.php');
		$query1='select id,username,auth from tetrauser where role=?'
		$query2='select id,username from tetrauser where role=?'
		$stmt=mysqli_stmt_init($conn);
		echo "<script>getElementById('user_det').style.setProperty('display','block');</script>"
		if($_POST['val']=='company' || $_POST['val']=='ngo')
		{	
			echo "<script>console.log('Working');</script>"
			if(!mysqli_stmt_prepare($stmt, $query1)){
			die("Prepare error".mysqli_error($conn));
			}
			else{
				echo "<script>getElementById('validate').style.setProperty('display','block');</script>"
				echo "<script>getElementById('valacc').style.setProperty('display','block');</script>"
				mysqli_stmt_bind_param($stmt, "s", $_POST['val']);
				$res=mysqli_stmt_execute($stmt);
				if(mysqli_num_row($res)>0){
					while ($row = mysql_fetch_assoc($res) {
						echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['auth']."</td><td id='".$row['id']."'>&#10004;</td><td id='".$row['id']."'>&times;</td></tr>"
					}
				}
				else{
					alert("No data in database: "+$_POST['val']);
				}
				}	
		}
		else
		{
			echo "<script>console.log('Working');</script>"
			if(!mysqli_stmt_prepare($stmt, $query2)){
			die("Prepare error".mysqli_error($conn));
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $_POST['val']);
				$res=mysqli_stmt_execute($stmt);
				if(mysqli_num_row($res)>0){
					while ($row = mysql_fetch_assoc($res) {
						echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td id='".$row['id']."'>&times;</td></tr>"
					}
				}
				else{
					alert("No data in database: "+$_POST['val']);
				}
				}
			}
		}
	}
	else{
		header("Location: ../admin.php");
		exit();
	}
?>