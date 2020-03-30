<html>
	<head>
		<title>
			Query History
		</title>
	</head>
	<body style="background-color: #00ffff">
	<font size=5 STYLE=courier>


<?php
	session_start();
	$con= mysqli_connect('localhost','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$key=$_SESSION['uname'];
	
	$sql = "SELECT queryid,Message,Answer FROM feedback WHERE UserName='$key'";
	
	if($res= mysqli_query($con,$sql)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
			
			echo 'Query No. : '.$row['queryid'] ;
			
			echo '<br><br>Query: '.$row['Message'] ;
			
			echo '<br><br>Answer: '.$row['Answer'];
			
		}
	}
	else
	{
		echo 'There are no queries.';
	}
									}
	else
	{
		echo 'Error in connection.';
	}

?>
</body>
</html>