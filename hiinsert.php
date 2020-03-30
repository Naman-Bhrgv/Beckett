<?php
	session_start();
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	$ouname=$_SESSION['uname'];
	$OName=$_POST['OName'];
	$HNo=$_POST['HNo'];
	$Loc=$_POST['Loc'];
	$LMark=$_POST['LMark'];
	$AHouse=$_POST['AHouse'];
	$city=$_POST['city'];
	$v=0;
	
	$sql="INSERT INTO HouseInfo(ouname,OName,HNo,Locality,Landmark,City,Area,Verify) VALUES ('$ouname','$OName','$HNo','$Loc','$LMark','$city','$AHouse','$v')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
		ECHO $sql;
	}
	else
	{
		echo 'Successfull';
	}
?>
