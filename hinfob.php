<html>
	<head>
		<body style="background-color: #00ffff">
		<font size=5 STYLE=courier>
			


<?php
	session_start();
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$sql1="SELECT h_id FROM jouseinfo WHERE OName='$oid'";
	
	if($res= mysqli_query($con,$sql1)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
		
			$hid=$row['h_id'];
		}
	}
	
	$hyear=$_POST['hyear'];
	$nbed=$_POST['nbed'];
	$nbath=$_POST['nbath'];
	$fi=$_POST['fi'];
	
	$sql="INSERT INTO inout('OId','HId','AGE','nbed','nbath','FI') VALUES ('$hyear','$nbed','$nbath','$fi')";
	
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
	}
	else
	{
		echo 'Successfull';
	}

?>

</body>
</html>