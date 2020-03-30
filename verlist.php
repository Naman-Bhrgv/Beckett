<html>
	<head>
		<title>
			Verification List
		</title>
	</head>
	<body style="background-color: #00ffff">
<?php
	$con= mysqli_connect('127.0.0.1','root','','beckett');
		if(!$con)
		{
			echo 'error';
		}
		
		$sql="SELECT h_id, OName FROM HOUSEINFO WHERE Verify=0";
		
		if($res=mysqli_query($con,$sql)){
		
			if(mysqli_num_rows($res) > 0)
			{
			
				echo 'The following house verifications havenot been done till now:';
				
				echo '<center>';
				while($row = mysqli_fetch_array($res))
				{
				
					echo'House details:';
					
					echo'<br><br>House id: '.$row['h_id'];
					
					echo'<br><br>Owner Name: '.$row['OName'];
					
					echo '<br><br>';
				
				}
				echo '</center>';
			}
		
		}
		
?>
	
	</body>
</html>
