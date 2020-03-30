<html>
	<head>
		<title>
			Rent Search Result
		</title>
	</head>
	<body style="background-color: #00ffff">
<?php
session_start();

$con=mysqli_connect('localhost','root','','beckett');

if(!$con)
{
	echo 'connection error';
}


$key=$session['h_id'];

$sql="SELECT * FROM Rentinfo WHERE H_Id='$key'";

if($res=mysqli_query($con,$sql))
{
if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{	
	
			echo 'The rent information of the house are:';
	
			echo '<center><br>';
	
			echo $row['OUName'];
			
			echo '<br>';
			
			echo $row['H_Id'];
			
			echo'<br>';
			
			echo $row['RentAmt'];
			
			echo '<br>';
			
			echo $row['Nmonths'];
			
			echo '<br>';
			
			echo'</center>';
			
		}
	}
}

?>
	
</body>
</html>