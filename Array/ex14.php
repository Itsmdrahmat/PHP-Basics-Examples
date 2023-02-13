<?php
	$marks = array(
		"jack" => array ("physics" => 35,"math" => 30, "chemistry" => 39),
		"tony" => array ("physics" => 30, "math" => 32, "chemistry" => 29),
		"sara" => array ("physics" => 31, "math" => 22, "chemistry" => 39)
	);
	
	echo "jack scored the following marks in his exam. Physics:".$marks["jack"]["physics"].",math:".$marks["jack"]["math"].", Chemistry:".$marks["jack"]["chemistry"]."<br />";
	echo "tony scored the following marks in his exam. Physics:".$marks["tony"]["physics"].",math:".$marks["tony"]["math"].", Chemistry:".$marks["tony"]["chemistry"]."<br />";
	echo "sara scored the following marks in his exam. Physics:".$marks["sara"]["physics"].",math:".$marks["sara"]["math"].", Chemistry:".$marks["sara"]["chemistry"];

?>
