<?php
	
	session_start();
	
	$con= mysqli_connect('localhost','root','','beckett');
	
	if(!$con)
	{
		echo 'error';
	}
	
	$reply=$_POST['reply'];
	
	$v1= $_SESSION['name'];
	
	$v2= $_SESSION['qid']; 
	
	$sql="UPDATE Feedback SET Answer='$reply' WHERE UserName='$v1' AND queryid='$v2' ";
	
	
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
	}
	else
	{
		echo 'Successfull';
	}
	
?>