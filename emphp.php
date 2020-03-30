
<html>
	<head>
		<title>
			Employee Home Page
		</title>
	</head>
	<body style="background-color: #00ffff">
		<center>
		<font size=10><h1>Welcome to Beckett!</h1></font> 
		
		<font size=8><i><br><h3>A one-stop destination for buy/selling/renting home/commercial property</h3></i>
		</font>
		<font size=6>
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

						echo 'Welcome'.$_POST['EDes'] ;
		
						echo'<br><br> Queries from user:<a href="http://localhost/test/qsol.php"> QueryList</a>';
						echo'<br><br>  <a href="http://localhost/test/pvfront.html"> Veification Form </a>';
						echo'<br><br> For list of unverified properties  <a href="http://localhost/test/verlist.php"> Click Here </a>!';
					}
				}
			}
		?>
		