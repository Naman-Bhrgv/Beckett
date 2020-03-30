<html>
	<head>
		<title>
			House Search 
		</title>
	</head>
	<body style="background-color: #00ffff">
	<font size=5 STYLE=courier>




<?php
session_start();
$con=mysqli_connect('localhost','root','','beckett');
if(!$con)
{
	echo 'connection error';
}

$key = $_POST['icity'];

$key1 = $_POST['area'];

$key2= $_POST['loc'];

$key3= $_POST['lmark'];

if($key != 'NULL')
{
	$sql="SELECT * FROM HouseInfo WHERE city='$key' ";
}
else
{
	$sql="SELECT * FROM HouseInfo";
}

if($key1 != 0)
{
	$sql1="SELECT * FROM ($sql) as temp WHERE Area='$key1'";
}
else
{
	$sql1=$sql;
}

if($key2 != 'NULL')
{
	$sql2="SELECT * FROM ($sql1) as temp1 WHERE Location='$key1'";
}
else
{
	$sql2=$sql;
}

if($key3 != 'NULL')
{
	$sql3="SELECT * FROM ($sql) as temp2 WHERE Landmark='$key3'";
}
else
{
	$sql3=$sql2;
}

if($res= mysqli_query($con,$sql3)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
			session['h_id']=$row['h_id'];
			echo 'House Detail:<br>';
			echo $row['h_id'];
			echo '<br>';
			ECHO 'Owner Name:'
			echo $row['OName'];
			echo '<br>';
			echo 'House No.:'
			echo $row['HNo'];
			echo '<br>';
			echo 'Locality:';
			echo $row['Locality'];
			echo '<br>';
			echo 'Landmark:';
			echo $row['Landmark'];
			echo '<br>';
			echo'City:';
			echo $row['City'];
			echo '<br>';
			echo 'Area of house:'
			echo $row['Area'];
			echo '<br>';
			if($row['Verify'] == 0)
			{
				echo 'Property unverified.';
			}
			else
			{
				echo 'Property verified';
			}
			echo '<br><br>';
			//echo 'Want rent details of the house then click here: Rent Information';
		}
			
	}
	
	else
	{
		echo 'no result';
	}
}
else
{
	
	echo $sql3;
}



?>

</body>
</html>