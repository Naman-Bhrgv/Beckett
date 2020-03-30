<?php

	$con=mysqli_connect('localhost','root','','beckett');

		if(!$con)
		{
			echo 'connection error';
		}
		
		if(!isset($_POST['iUName']))
		{
			$sql="SELECT * FROM Userreg";
		}
		else
		{
			$t1=$_POST['iUName'];
			$sql="SELECT * FROM Userreg WHERE UName='$t1'";
			
			if($res= mysqli_query($con,$sql)){
			if(mysqli_num_rows($res) ==	0) //check syntax
			{
				$sql="SELECT * FROM Userreg WHERE UMobile='$t1'";
				if($res= mysqli_query($con,$sql)){
				if(mysqli_num_rows($res) ==	0) //check syntax
				{
					$sql="SELECT * FROM Userreg WHERE UserName='$t1'";
				}
				
			
												}
			}
											}
		}
		
		
		
		if(!isset($_POST['rmin']) || trim($_POST['rmin']==''))
		{
			$sql1=$sql;
		}
		else
		{
			
			$sql1="SELECT '$sql'.UName,'$sql'.UMobile,'$sql'.UserName,rentinfo.H_Id,rentinfo.RentAmt,rentinfo.Nmonths  FROM '$sql' INNER JOIN rentinfo ON '$sql'.UserName=rentinfo.O_UName WHERE RentAmt>='$rmin' AND RentAmt<='$$rmax'";
		}
		
		if(!isset($_POST['smin']) ||  trim($_POST['smin']=='') )
		{
			$sql2=$sql1;
		}
		else
		{
		$smin=$_POST['smin'];
		$smax=$_POST['smax'];
		echo $sql2;
		$sql2="SELECT '$sql1'.UName,'$sql1'.UMobile,'$sql1'.UserName,'$sql1'.H_Id,'$sql1'.RentAmt,'$sql1'.Nmonths FROM '$sql1' WHERE  SAmtE>='$smin' AND SAmtE< '$smax'";
		}
		
		
		if(!isset($_POST['nmin']) ||  trim($_POST['nmin']==''))
		{
			$sql3=$sql2;
		}
		else
		{
			$nmin=$_POST['nmin'];
			$nmax=$_POST['nmax'];
			
			$sql4="SELECT '$sql2'.UName,'$sql2'.UMobile,'$sql2'.UserName,'$sql2'.H_Id,'$sql2'.RentAmt,'$sql2'.Nmonths FROM '$sql2' WHERE Nmonths>='$nmin' AND Nmonths<'$nmax'";
		}
		
		
		
		if(!isset($_POST['locality']) || trim($_POST['locality']==''))
		{
			$sql5=$sql4; 
		}
		else
		{
			$loc=$_POST['locality'];
			$sql5="SELECT locality.OId,locality.HId,locality.Locality,locality.AddNotes,'$sql4'.RentAmt,'$sql4'.'SAmtE','$sql4'.'Nmonths','$sql4'.Age,'$sql4'.bed,'$sql4'.nbath,'$sql4'.FI FROM '$sql4' INNER JOIN locality ON locality.HId='$sql4'.H_Id WHERE Locality='$loc'";
		}
		
		if(!isset($_POST['lmark']) || trim($_POST['lmark']==''))
		{
			$sql6=$sql5;
		}
		else
		{
			$sql6="SELECT '$sql5'.OId,'$sql5'.HId,'$sql5'.Locality,'$sql5'.AddNotes,'$sql5'.RentAmt,'$sql5'.SAmtE,'$sql5'.Nmonths,'$sql5'.Age,'$sql5'.bed,'$sql5'.nbath,'$sql5'.FI,houseinfo.OName,houseinfo.HNo,houseinfo.Landmark,houseinfo.City,houseinfo.Area,houseinfo.Verify FROM '$sql5' INNER JOIN houseinfo ON '$sql5'.OId=houseinfo.Ouname";
		}
		
		if(!isset($_POST['city']) || trim($_POST['city']=='') )
		{
			$sql7=$sql6;
		}
		else
		{
			$city=$_POST['city'];
			$sql7="SELECT * FROM '$sql6' WHERE City='$city'";
		}
		
		if(!isset($_POST['amin']) || trim($_POST['amin']==''))
		{
			$sql8=$sql7;
		}
		else
		{
			$armin=$_POST['amin'];
			$armax=$_POST['amax'];
			$sql8="SELECT * FROM '$sql7' WHERE Area>='$armin' AND Area<'$armax'";
		}
		
		if(!isset($_POST['ver']) || trim($_POST['ver']==''))
		{
			$sql9=$sql8;
		}
		else
		{
			$sql9="SELECT * FROM '$sql8' WHERE Verify= 1";
		}
		
		if(!isset($_POST['ver']) || trim($_POST['ver']==''))
		{
			$sql10=$sql9;
		}
		else
		{
			$sql10="SELECT * FROM '$sql9' WHERE Verify= 0";
		}
		
		echo $sql10;
		echo'<h4> The search results are: <br>';
		
		if($res= mysqli_query($con,$sql10)){
			if(mysqli_num_rows($res) > 0)
			{
				while($row = mysqli_fetch_array($res))
				{
					echo'<br><br>Owner Name: '.$row['OName'];
					echo'<br><br>Owner Username: '.$row['OId'];
					echo'<br><br>House Id: '.$row['HId'];
					echo'<br><br>House No. :'.$row['HNo'];
					
					if($row['RentAmt']!=0)
					{	
						echo'<br><br>Rent Amount: '.$row['RentAmt'];
						echo'No. of months: '.$row['Nmonths'];
					}
					else
					{
						echo'<br><br>Sale Amount: '.$row['SAmtE'];
					
					}
					echo'<br><br>No. of bedrooms: '.$row['bed'];
					if($row['FI']==0)
					{
						echo'Type of house: Flat';
					}
					else
					{
						echo'Type of house: Independent';
					}
					echo'Area of house: '.$row['Area'];
					echo'<br><br>Age: '.$row['Age'];
					echo'<br><br>Locality: '.$row['Locality'];
					echo'<br><br>Landmark: '.$row['Landmark'];
					echo'<br><br>City: '.$row['City'];
					if($row['Verify']==0)
					{
						echo'<br><br>Unverified';
					}
					else
					{
						echo'<br><br>Verified';
					}
					echo'<br><br>Additional Information about locality: '.$row['AddNotes'];
				}	
			}
		}
?>		
		
		