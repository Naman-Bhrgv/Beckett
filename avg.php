<html>
	<head>
		<title>
			City Information
		</title>
	</head>
	<body style="background-color: #00ffff">
	<font size=5 STYLE=courier>
<?php	
		$con=mysqli_connect('localhost','root','','beckett');

		if(!$con)
		{
			echo 'connection error';
		}
		
		$scity=$_POST['scity'];
		
		
		
		$sql="SELECT AVG(AREA) as aarea FROM houseinfo WHERE City='$scity'";
		
		$sql1="SELECT rentinfo.RentAmt as ramt FROM rentinfo  INNER JOIN houseinfo  WHERE rentinfo.h_id=houseinfo.H_Id ";
		
		if(!$res=mysqli_query($con,$sql))
		{
			echo 'Error';
		}
		else
		{
			
			if(mysqli_num_rows($res) >0)
		{
			while($row = mysqli_fetch_array($res))
			{
				echo 'City : '.$scity;
			
				echo'<br>Average price of house: '.$row['aarea'];
			}
		}
			
			
		}
		
		if(!$res1=mysqli_query($con,$sql1))
		{
			echo 'Error1';
		}
		else
		{
			if(mysqli_num_rows($res1) >0)
		{
			while($row = mysqli_fetch_array($res1))
			{
				echo 'City : '.$scity;
			
				echo'<br>Average rent of house: '.$row['ramt'];
			}
		}
			else
				echo 'error3';
		}	
?>
</font>	
</body>
</html>