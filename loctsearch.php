<html>
	<head>
		<title>
			Location Search 
		</title>
	</head>
<body style="background-color: #00ffff">
<font size=5 STYLE=courier>
<?php
	$con= mysqli_connect('127.0.0.1','root','','beckett');
	if(!$con)
	{
		echo 'error';
	}
	
	$oid=$_POST['oid'];
	
	$pid=$_POST['pid'];
	
	$amin=$_POST['amin'];
	
	$amax=$_pPOST['amax'];
	
	$lmin=$_POST['lmin'];
	
	$lmax=$_POST['lmax'];
	
	$ldmin=$_POST['ldmin'];
	
	$ldmax=$_POST['ldmax'];
	
	$smin=$_POST['smin'];
	
	$smax=$_POST['smax'];
	
	if($oid !='NULL')
	{
		$sql="SELECT * FROM comprop WHERE Ownerid='#oid'";
		
	}
	else
	{
		$sql = "SELECT * FROM rentinfo";
	}
	
	if($pid !='NULL')
	{
		$sql1="SELECT * FROM ($sql) as temp WHERE Propid='$pid'";
	}
	else
	{
		$sql1=$sql;
	}
	
	if($amin !=0)
	{
		$sql2="SELECT * FROM ($sql1) WHERE Area>='$amin' AND Area<='$amax'";
	}
	else
	{
		$sql2=$sql1;
	}
	
	if($lmin !=0)
	{
		$sql3="SELECT * FROM ($sql2) WHERE LAmount>='$lmin' 
		AND LAmount<='$lmax';
	}
	else
	{
		$sql3=$sql2;
	}
	
	if($ldmin !=0)
	{
		$sql4="SELECT * FROM ($sql3) WHERE LDur>='$ldmin' AND LDur<='$ldmax';
	}
	else
	{
		$sql4=$sql3;
	}
	
	if($smin!=0)
	{
		$sql5="SELECT * FROM ($sql4) WHERE SExpAmt>='$smin' 
		AND SExpAmt<='$smax'";
	}
	else
	{
		$sql5=$sql4;
	}
	
	if($res= mysqli_query($con,$sql5)){
	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_array($res))
		{
			echo'House Id-'.$row['H_Id'];
			echo'<br> Locality-'.$row['Locality'];
			echo'<br> '.$row['AddNotes'];
			echo '<br>';
		}
	}
	else
	{
		echo 'no result';
	}
										}
	else
	{
	
		echo 'Error';
	}

?>	
	
	
</body>
</html>