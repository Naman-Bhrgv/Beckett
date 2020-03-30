
<?php
session_start();
$con= mysqli_connect('localhost','root','','Beckett');
if(!$con)
{
	echo 'error';
}

$fname=$_POST['fname'];
$fmno=$_POST['fmno'];
$funame=$_POST['funame'];
$fpwd=$_POST['fpwd'];

$user_check_query="SELECT * FROM userreg WHERE UserName='$funame' ";


	$sql="INSERT INTO userreg(UName,UMobile,UserName,Password) VALUES ('$fname','$fmno','$funame','$fpwd')";


	if(!mysqli_query($con,$sql))
	{
		echo 'Error';
	}
	else
	{
		$_SESSION['uname']=$funame;
		echo 'Successfully created your account!'; 
		echo 'Welcome '.$fname;
		 
		echo '<br><br> Click on this link to register your property:';
		echo '<a href="http://localhost/test/houseinformation.html"> Property Registration </a> <br><br>';
		echo '<a href="http://localhost/test/cpreg.html" Commercial Property Registration </a>';
		echo '<a href="http://localhost/test/locinfo.html" Locality Information </a>';
		echo 'Are you facing any problems? If yes then inform us here:';
			
			//echo '<input type="hidden" name="uname" value="$uname">';
			
			echo'<form action="fupdate.php" method="POST">';
			
			echo'<br><br><textarea rows="4" cols="50" name="fmsg"> </textarea>';
			
			echo '<br><br><button type="submit" name="sub"> submit </button>';
			
			echo '</form>';
			
			echo 'Check answers of your previous queries here:<br><br>';
			
			echo '<a href="http://localhost/test/qhistory.php">Query History </a>';
				
			echo '<br><a href="http://localhost/test/locinfo.html"> LocalityInformation </a>';
		
			echo '<br><br><a href="http://localhost/test/cpreg.html"> Commercial Property </a> ';
		
	}

?>
