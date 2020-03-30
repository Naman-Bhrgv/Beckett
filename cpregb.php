<?php
	session_start();
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$oid=$_SESSION['uname'];
	
	$areap=$_POST['areap'];
	
	$lamt=$_POST['lamt'];
	
	$ldur=$_POST['ldur'];
	
	$c1=$_POST['c1'];
	
	if(!isset($_POST['c2']))
	{
		$c2='a';
	}
	else
	{
		$c2=$_POST['c2'];
	}
	
	$sea=$_POST['sea'];
	
	$sql="INSERT INTO Comprop(Ownerid,Area,LAmount,LDur,TProp,Sale,SExpAmt) VALUES('$oid','$areap','$lamt','$ldur','$c1','$c2','$sea') ";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
	}
	else
	{
		echo 'Successfull';
		echo $sql;
	}
?>