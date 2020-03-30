<?php
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$ename=$_POST['ename'];
	
	$edes=$_POST['edes'];
	
	$eun=$_POST['eun'];
	
	$epwd=$_POST['epwd'];
	
	ECHO $edes;
	$sql="INSERT INTO EmpReg(EName,EDes,EUserName,EPassword) VALUES('$ename','$edes','$eun','$epwd')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
	}
	else
	{
		echo 'Successfull';
	}
?>