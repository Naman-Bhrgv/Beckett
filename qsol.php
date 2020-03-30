<html>
	<head>
		<title>
			Query Solution 
		</title>
	</head>
	<body style="background-color: #00ffff">
<?php
	session_start();
	$con= mysqli_connect('localhost','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$sql="SELECT * FROM Feedback";
	
	//ECHO $sql;
	if($res= mysqli_query($con,$sql)){
	if(mysqli_num_rows($res) > 0)
	{
		
		
		while($row = mysqli_fetch_array($res))
		{
			
			$_SESSION['name']=$row['UserName'];
			$_SESSION['qid']=$row['queryid'];
			
			echo '<font size=6>';
			echo 'UserName: '.$row['UserName'];
			
			echo'<br><br> Query No.: '.$row['queryid'];
			
			echo'<br><br> Query: '.$row['Message'];
			
			echo '<center>';
			ECHO'<form action="fupdate.php" method="POST">';
		
			ECHO'Enter reply here:';
			ECHO'<textarea rows="4" cols="51" name="reply"></TEXTAREA>';
		
			ECHO'<br> <input type="Submit">';
		
			
			
			ECHO'</form>';
			echo '</font>';
			echo '</center>';
		}
	}
	}
	
?>
	</body>
</html>
