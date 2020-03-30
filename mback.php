<?php

	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	if(isset($_POST['h_id']))
	{
		$h_id=$_POST['h_id'];
	}
	else
	{
		$h_id='NULL';
	}
	
	if(isset($_POST['OName']))
	{
		$OName=$_POST['OName'];
	}
	else
	{
		$OName='NULL';
	}
	if(isset($_POST['Locality']))
	{
		$Locality=$_POST['Locality'];
	}
	else
	{
		$Locality='NULL';
	}
	if(isset($_POST['Landmark']))
	{
		$Landmark=$_POST['Landmark'];
	}
	else
	{
		$Landmark='NULL';
	}
	
	$City=$_POST['City'];
	
	$Area=$_POST['Area'];
	
	$Verify=$_POST['Verify'];
	
?>