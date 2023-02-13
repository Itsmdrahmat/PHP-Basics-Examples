<?php
	$emps = array(
		array("john","25",40000),
		array("ashley ","23",50000),
		array("steve","21")
	);
	
	$emps[1][0] = "jacob";//overwriting value
	$emps[2][2] = 30000;//adding value
	
	echo "Basic info of employees: <br /><br />";
	echo "name:".$emps[0][0].", age:".$emps[0][1].", salary:".$emps[0][2]."<br />";
	echo "name:".$emps[1][0].", age:".$emps[1][1].", salary:".$emps[1][2]."<br />";
	echo "name:".$emps[2][0].", age:".$emps[2][1].", salary:".$emps[2][2]."<br />";

?>