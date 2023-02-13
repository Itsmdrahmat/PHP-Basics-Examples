<?php
	//in 3 months one acre of apple trees can produce an average 48000 apples
	//cp of the apple is ₹10, profit behind per apple must be ₹5
	
	$fruit = array("apples");
	$fruit[] = 48000;
	$fruit[] = 10+5;
	$fruit[] = "3 months";
	$fruit[] = "400 kg fertilizer";
	echo "It took " . $fruit[3] . " and " . $fruit[4] . " to grow " . $fruit[1] ."&nbsp;". $fruit[0] . ". The cost price of an apple is ₹10 and will be sold at ₹" .$fruit[2];
	
	//You can print_r() the array if you want to see the positions of the inserted values
	//print_r($fruit);
?>
