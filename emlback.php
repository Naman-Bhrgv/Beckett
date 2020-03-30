<?php
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$uname=$_POST['eid'];
	
	$pwd=$_POST['pwd'];
	
	$sql="SELECT * FROM empreg WHERE EUserName='$uname' AND EPassword='$pwd' ";
	
	if($res= mysqli_query($con,$sql)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
		
			echo 'Welcome to beckett property regestration';
			
			echo '<a href="http://localhost/test/qsol.php"> Queries </a>';
		
			echo '<a href="http://localhost/test/pvfront.html"> Vefic </a>'
		
			echo '<a href="http://localhost/test/verlist.php"> Unverified Properties '
		}
	}
	else
	{
		echo 'login id/ password wrong or doesnt exist';
	}
									}
else
{
	echo 'error2';
	echo $sql;
}

?>
	
	