<?php
	session_start();
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	$hid=$_POST['hid'];
	$oid=$_SESSION['uname'];
	$lmark=$_POST['lmark'];
	$anotes=$_POST['anotes'];
	echo $oid;
	
		
	$sql="INSERT INTO locality(OId,HId,Locality,AddNotes) VALUES('$oid','$hid','$lmark','$anotes')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
	}
	else
	{
		echo 'Successfull';
	}

	
	
?>