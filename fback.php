<?php
session_start();
$con= mysqli_connect('localhost','root','','beckett');
if(!$con)
{
	echo 'error';
}


if(isset($_POST['fmsg']))
			{
			
				$fmsg=$_POST['fmsg'];
				
				$uname=$_SESSION['name'];
				
				echo $fmsg;
				
				$sql1="INSERT INTO Feedback(UserName,Message) VALUES ('$uname','$fmsg')";
			
				if(!mysqli_query($con,$sql1))
				{
					echo 'Error in posting message';
				}
				else
				{	
					echo 'Successfully posted message';
				}
			}
?>