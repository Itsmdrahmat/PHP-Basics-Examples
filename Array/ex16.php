<?php

	$fruits = array(
		"apple"=>array("time"=>"3 months","fertilizer"=>"400","count"=>"48000","cost_price"=>"10"),
		"orange"=>array("time"=>"2 months","fertilizer"=>"350","count"=>"35000","cost_price"=>"5"),
		"watermelon"=>array("time"=>"5 months","fertilizer"=>"500","count"=>"20000","cost_price"=>"20"),
		"banana"=>array("time"=>"1.5 months","fertilizer"=>"200","count"=>"30000","cost_price"=>"4"),
	);
	
	echo "It took ".$fruits["apple"]["time"]." and ".$fruits["apple"]["fertilizer"]." fertilizer to grow
	".$fruits["apple"]["count"]." apples. The cost price is ₹".$fruits["apple"]["cost_price"]." and will be sold at
	₹".($fruits["apple"]["cost_price"]+5)."<br />";
	
	echo "It took ".$fruits["orange"]["time"]." and ".$fruits["orange"]["fertilizer"]." fertilizer to grow
	".$fruits["orange"]["count"]." oranges. The cost price is ₹".$fruits["orange"]["cost_price"]." and will be sold at
	₹".($fruits["orange"]["cost_price"]+5)."<br />";
	
	echo "It took ".$fruits["watermelon"]["time"]." and ".$fruits["watermelon"]["fertilizer"]." fertilizer to grow
	".$fruits["watermelon"]["count"]." watermelons. The cost price is ₹".$fruits["watermelon"]["cost_price"]." and will
	be sold at ₹".($fruits["watermelon"]["cost_price"]+5)."<br />";
	
	echo "It took ".$fruits["banana"]["time"]." and ".$fruits["banana"]["fertilizer"]." fertilizer to grow
	".$fruits["banana"]["count"]." bananas. The cost price is ₹".$fruits["banana"]["cost_price"]." and will be sold at
	₹".($fruits["banana"]["cost_price"]+5)."<br />";
?>