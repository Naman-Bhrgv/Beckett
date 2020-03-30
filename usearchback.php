<?php
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$key=$_POST['key'];
	
	$sql="SELECT * FROM USERREG WHERE UserName='$key'";
	
	if($res= mysqli_query($con,$sql))
	{
		if(mysqli_num_rows($res) >0)
		{
			while($row = mysqli_fetch_array($res))
			{
				echo $row['UserName'];
			}
		}
	}
	
?>