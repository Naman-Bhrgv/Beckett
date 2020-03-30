<?php
	$file= $_FILES['imgfile'];

	$fileName=$_FILES['imgfile']['name'];
	$fileTmpName=$_FILES['imgfile']['tmp_name'];
	$filesize=$_FILES['imgfile']['size'];

	$fileError=$_FILES['imgfile']['error'];

	$fileType=$_FILES['imgfile']['type'];

	if($fileError === 0)
	{
		$filedestination='upload'.fileName;
		mov_uploaded_file($fileTmpName,$filedestination);
	}
?>	