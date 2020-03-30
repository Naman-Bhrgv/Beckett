<?php
$con= mysqli_connect('localhost','root','','Tutorial');
if(!$con)
{
	echo 'error';
}



$name = $_POST['tname'];

$sql="INSERT INTO temp(TName) VALUES ('$name')";

if(!mysqli_query($con,$sql))
{
	echo 'Error';
}
else
{
	echo 'Successfull';
}
header("refresh:2; url=index.html")
?>	