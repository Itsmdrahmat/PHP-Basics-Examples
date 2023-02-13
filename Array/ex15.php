<?php
	$marks = array(
		"jack" => array ("physics" => 35,"math" => 30, "chemistry" => 39),
		"tony" => array ("physics" => 30, "math" => 32, "chemistry" => 29),
		"sara" => array ("physics" => 31, "math" => 22, "chemistry" => 39)
	);
	
	$average["jack"] = ($marks["jack"]["physics"] + $marks["jack"]["math"] + $marks["jack"]["chemistry"]) / 3;
	$average["tony"] = ($marks["tony"]["physics"] + $marks["tony"]["math"] + $marks["tony"]["chemistry"]) / 3;
	$average["sara"] = ($marks["sara"]["physics"] + $marks["sara"]["math"] + $marks["sara"]["chemistry"]) / 3;
	
	$average["jack"] = round($average["jack"],2);
	$average["tony"] = round($average["tony"],2);
	$average["sara"] = round($average["sara"],2);
	
	echo "Average marks of jack, tony and sara are " . $average["jack"] .", ". $average["tony"] .", ".
	$average["sara"] . " respectively";
?>
