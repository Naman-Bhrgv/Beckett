
<?php

	
		$con= mysqli_connect('127.0.0.1','root','','beckett');
		if(!$con)
		{
			echo 'error';
		}
		
		$oname=$_POST['oname'];
		
		$hid=$_POST['hid'];
		
		$sql="UPDATE houseinfo SET Verify =1 WHERE h_id='$hid' AND OName='$oname'";
		
		if($res= mysqli_query($con,$sql)){
			
			echo 'Successfull';
		
		}
		else
			echo 'Error';
	
	
?>