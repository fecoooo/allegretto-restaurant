<?php 

	$fileName = "content" . $_POST["category"] . ".html";

	$myfile = fopen($fileName, "r") or die("Unable to open file!");
	echo fread($myfile,filesize($fileName));
	fclose($myfile);

?>