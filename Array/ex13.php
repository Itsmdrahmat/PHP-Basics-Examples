<?php
	$emps = array(
		array("john","25",40000),
		array("ashley ","23",50000),
		array("steve","21")
	);
	
	$emps[1][0] = "jacob";//overwriting value
	$emps[2][2] = 30000;//adding value
	
	$avrage_sal = ($emps[0][2]+$emps[1][2]+$emps[2][2])/3; //calculating average
	echo "Average salary of ".$emps[0][0].", ".$emps[1][0]." and ".$emps[2][0]." is ".$avrage_sal;


?>