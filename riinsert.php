<?php
$con= mysqli_connect('localhost','root','','beckett');
if(!$con)
{
	echo 'error';
}

$oun=$_POST['oun'];
$hid=$_POST['hid'];
$ramt=$_POST['ramt'];
$amt=$_POST['amt'];
$nmonth=$_POST['nmonth'];
$sr=$_POST['sr'];

$sql="INSERT INTO rentinfo(O_UName,H_Id,RentAmt,SAmtE,Nmonths,SoR) VALUES('$oun','$hid','$ramt','$amt','$nmonth','$sr')";

if(!mysqli_query($con,$sql))
{
	echo $sql;
}
else
{
	echo 'Successfull';
}



?>