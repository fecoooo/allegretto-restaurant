<?php 

	$fileName = "content" . implode('_', $_POST["category"]) . ".html";

	$myfile = fopen(__DIR__ . '/' . $fileName, "r") or die("Unable to open file!");
	echo fread($myfile,filesize($fileName));
	fclose($myfile);

?>