<?php
	$item = "Model Cars";
	$sales = array(
		array("age"=>"6 - 8", "quantity"=>186),
		array("age"=>"9 - 10", "quantity"=>212),
		array("age"=>"11 - 13", "quantity"=>320),
		array("age"=>"14 - 16", "quantity"=>134)
	);
	
	$highest_sell = max($sales[0]["quantity"], $sales[1]["quantity"], $sales[2]["quantity"], $sales[3]["quantity"]);
	switch($highest_sell){
		case $sales[0]["quantity"]:
		echo "The " . $item . " were the highest sold item in the age group " . $sales[0]["age"] . " selling " . $highest_sell . " units";
		break;
		case $sales[1]["quantity"]:
		echo "The " . $item . " were the highest sold item in the age group " . $sales[1]["age"] . " selling " . $highest_sell . " units";
		break;
		case $sales[2]["quantity"]:
		echo "The " . $item . " were the highest sold item in the age group " . $sales[2]["age"] . " selling " . $highest_sell . " units";
		break;
		case $sales[3]["quantity"]:
		echo "The " . $item . " were the highest sold item in the age group " . $sales[3]["age"] . " selling " . $highest_sell . " units";
	}
?>
