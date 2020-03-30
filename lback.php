<html>
	<head>
		<title>
			User Home Page
		</title>
	</head>

<?php
	session_start();
	$con= mysqli_connect('localhost','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}



$uname=$_POST['uname'];

$_SESSION['uname']=$uname;

$pwd=$_POST['pwd'];

$_SESSION['name']=$_POST['uname'];

$sql="SELECT * FROM Userreg WHERE UserName='$uname' AND Password='$pwd' ";

if($res= mysqli_query($con,$sql)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
			echo 'Welcome '.$row['UName'];
		 
			echo '<br><br> Click on this link to register your property:';
			echo '<a href="http://localhost/test/houseinformation.html"> Property Registration </a> ';
			
			echo '<form action="fback.php" method="POST">';
			
			
			echo 'Are you facing any problems? If yes then inform us here:';
			
			//echo '<input type="hidden" name="uname" value="$uname">';
			
			echo'<br><br><textarea rows="4" cols="50" name="fmsg"> </textarea>';
			
			echo '<br><br><button type="submit" name="sub"> submit </button>';
			
			echo '</form>';
			
			echo 'Check answers of your previous queries here:<br><br>';
			
			echo '<a href="http://localhost/test/qhistory.php">Query History </a>';
				
			echo '<br><a href="http://localhost/test/locinfo.html"> LocalityInformation </a>';
		
			echo '<br><br><a href="http://localhost/test/cpreg.html"> Commercial Property </a> ';
		
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
	//echo $sql;
}

?>