<?php
	$customers = array("name_1"=>"Steve","name_2"=>"Jessica","name_3"=>"Max","name_4"=>"Jenny");
	
	$orders = array(
		"Steve" => "2 boxes of biscuits and 50 packets of instant noodles",
		"Jessica" => "5 mango ice-cream tubs, 10 strawberry ice-cream boxes, 20 chocolate cones",
		"Max" => "8 sets of fever tablets, 20 bottles of cough medicine",
		"Jenny" => "10 dozen eggs, 30 liter milk, 5 kg paneer and 35 cubes of cheese"
	);
	
	echo $customers["name_1"] . "'s" . " order: " . $orders[$customers["name_1"]] . "<br /><br />";
	echo $customers["name_2"] . "'s" . " order: " . $orders[$customers["name_2"]] . "<br /><br />";
	echo $customers["name_3"] . "'s" . " order: " . $orders[$customers["name_3"]] . "<br /><br />";
	echo $customers["name_4"] . "'s" . " order: " . $orders[$customers["name_4"]];
?>