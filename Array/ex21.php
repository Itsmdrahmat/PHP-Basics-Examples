<?php
	$sports_data = array(
		"sports" => array("s1"=>"Football", "s2"=>"Roller skates", "s3"=>"Ping Pong", "s4"=>"bicycle"),
		"votes" => array("v1"=>275, "v2"=>123, "v3"=>289, "v4"=>480)
	);
	$max_vote = max($sports_data["votes"]);
	$max_key = array_search($max_vote, $sports_data["votes"]);
	$max_key = str_replace("v","s",$max_key);
	echo "The most popular sport of the month is " . $sports_data["sports"][$max_key] . " which got " . $max_vote . " votes";
?>
