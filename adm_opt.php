<?php
	if(isset($_POST['val']))
	{
		require_once('cred.php');
		$query1='select id,username,auth from tetrauser where role=?';
		$query2='select id,username from tetrauser where role=?';
		$stmt=mysqli_stmt_init($conn);
		echo "<script>document.getElementById('user_det').style.setProperty('display','block');</script>";
		if($_POST['val']=='company' || $_POST['val']=='ngo')
			{	
				if(!mysqli_stmt_prepare($stmt, $query1))
					{
					die("Prepare error".mysqli_error($conn));
					}
				else
					{
						mysqli_stmt_bind_param($stmt, "s", $_POST['val']);
						mysqli_stmt_execute($stmt);
						$res=mysqli_stmt_get_result($stmt);
						if(mysqli_num_rows($res)>0)
						{
						echo "<div id='user_det'>
								<table cellspacing='2' border='1'>
									<tr>
										<th>UID</th>
										<th>Username</th>
										<th>Validate</th>
										<th>Accept</th>
										<th>Remove</th>
									</tr>";
							while ($row = mysqli_fetch_assoc($res))
							{
								echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['auth']."</td><td id='".$row['id']."'><button class='tick_btn' value='".$row['id']."'>&#10004;</button></td><td class='delete' value='".$row['id']."'><button class='close_btn'>&times;</button></td></tr>";
							}
							echo "</table>
							</div>";
						}
						else
						{
							echo "<script>alert('No data in database: '".$_POST['val']."');</script>";
						}
					}
			}
		else
			{
				if(!mysqli_stmt_prepare($stmt, $query2))
				{
					die("Prepare error".mysqli_error($conn));
				}
				else
				{
					mysqli_stmt_bind_param($stmt, "s", $_POST['val']);
					mysqli_stmt_execute($stmt);
					$res=mysqli_stmt_get_result($stmt);
					if(mysqli_num_rows($res)>0)
					{
						echo "<div id='user_det'>
								<table cellspacing='2' border='1'>
									<tr>
										<th>UID</th>
										<th>Username</th>
										<th>Remove</th>
									</tr>";
						while ($row = mysqli_fetch_assoc($res))
						{
							echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td class='delete'><button class='close_btn' value='".$row['id']." '>&times;</button></td></tr>";
						}
						echo "</table>
							</div>";
					}
					else
					{
						echo "<script>alert('No data in database: '".$_POST['val']."');</script>";
					}
				}
			}
			echo "<script>$('.close_btn').click(function(){
					var id = $(this).val();
					$.post('del_rec.php',{id:id},function(){alert('Record '+id+' Deleted!')});
					location.reload();
				});
				if($('.tick_btn'))
				{
				$('.tick_btn').click(function(){
					var id = $(this).val();
					$.post('acc_rec.php',{id:id},function(){alert('Record '+id+' Validated!')});
					location.reload();
				});
				}
				</script>";
	}
	else{
		header("Location: ../admin.php");
		exit();
	}
?>