
<html>
<h2>Hello </h2>

<?php
	$variable = $_GET['instruction'];
	if ($_GET['instruction'] == "1")
	{
		echo "gets here";
		if ($_GET['player'] == "1")
			$myFile = 'accelFile1.txt';
		else if ($_GET['player'] == "2")
			$myFile = 'accelFile2.txt';
		
		$accel=$_GET['accel_direction'];
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $accel);
		fclose($fh);
		
	}
	if ($_GET['instruction'] == "2")
	{
		$scanresponse=$_GET['scan_response'];
		$myFile = 'responseFile.txt';
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $scanresponse);
		fclose($fh);
	}
?>
</html>

