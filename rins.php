<?php
$con=mysqli_connect('localhost','root','','beckett');

if(!$con)
{
	echo 'error';
}

$hid=$_POST['hid'];

$ramt=$_POST['ramt'];

$rdur=$_POST['rdur'];

$samt=$_POST['samt'];

$mode=$_POST['mode'];

$sql="INSERT INTO rentinfo(hid,rentamt,rentdur,samt,mode) VALUES ('$hid,$ramt,$rdur,$samt',$mode)";

if(!mysqli_query($con,$sql))
{
	echo 'Error';
}
else
{
	echo 'Successfull';
}

?>