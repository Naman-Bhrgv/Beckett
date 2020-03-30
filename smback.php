<?php
$con=mysqli_connect('localhost','root','','beckett');
if(!$con)
{
	echo 'connection error';
}

if(empty($_POST['sloc']))
{	
	$key1=0;
}
else
{
	$keyl = $_POST['sloc'];
}

if(empty($_POST['scity']))
{	
	$key2=0;
}
else
{
	$key2 = $_POST['scity'];
}


echo $key1;

if($key1!=0)
{
	
}

echo $key2;


?>