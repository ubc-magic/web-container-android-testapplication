<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	$arr = array('image' => $_FILES['userfile']['name']);
	echo json_encode($arr);
#	echo $_FILES['userfile']['name'];

	#echo "File ". $_FILES['userfile']['name'] ." uploaded successfully.";
	#echo "Type ". $_FILES['userfile']['type'] ." \n";
	move_uploaded_file ($_FILES['userfile'] ['tmp_name'], $_FILES['userfile'] ['name']);
	#echo "Player number: " . $_POST['player'];
	if ($_POST['player'] == "1")
	{
		$tilecommand= "/usr/bin/convert -crop 3x4@ /../home/ggproofs/public_html/sinfulseven/coffeeshop/".$_FILES['userfile']['name']." /../home/ggproofs/public_html/sinfulseven/coffeeshop/tile1p%d.jpg";		
		exec($tilecommand);
//		echo $tilecommand;
	}
	else if ($_POST['player'] == "2") {
		$tilecommand= "/usr/bin/convert -crop 3x4@ /../home/ggproofs/public_html/sinfulseven/coffeeshop/".$_FILES['userfile']['name']." /../home/ggproofs/public_html/sinfulseven/coffeeshop/tile2p%d.jpg";
		exec($tilecommand);
	}

} else {
  echo "Possible file upload attack: ";
  echo "filename '". $_FILES['userfile']['tmp_name'] . "'.";
  print_r($_FILES);
}
?>