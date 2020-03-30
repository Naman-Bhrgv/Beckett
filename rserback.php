<html>
	<head>
		<title>
			City Information
		</title>
	</head>
	<body style="background-color: #00ffff">
	<font size=5 STYLE=courier>

<?php
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$hid=$_POST['hid'];
	
	$rmin=$_POST['rmin'];
	
	$rmax=$_POST['rmax'];
	
	$nmonths=$_POST['nmonths'];
	
	if($hid != 'NULL')
	{
		$sql = "SELECT * FROM rentinfo WHERE h_id='$hid'";
	}
	else
	{
		$sql = "SELECT * FROM rentinfo";
	}
	
	if($rmin != '0')
	{
		$sql1 = "SELECT * FROM ($sql) as temp WHERE RentAmt IN('rmin','rmax')";
	}
	else
	{
		$sql1 = $sql;
	}
	
	if($nmonths != 0)
	{
		$sql2 = "SELECT * FROM ($sql1) as temp1 WHERE Nmonths='$nmonths'";
	}
	else
	{
		$sql2 = $sql1;
	}
	
if($res= mysqli_query($con,$sql2)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
			echo 'House Id- '.$row['H_Id'];
			echo '<br>';
			echo 'Owner User Name-'.$row['O_UName'];
			echo '<br>';
			if($row['RentAmt']!=0)
			{
				echo'Rent amount-'.$row['RentAmt'];
				echo '<br>';
			}
			if($row['SAmtE']!=0)
			{
				echo'Sale Amount-'.$row['SAmtE'];
				echo '<br>';
			}
			if($row['Nmonths']!=0)
			{
				echo'No. of months rent: '.$row['Nmonths'];
				echo'<br>';
			}
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

