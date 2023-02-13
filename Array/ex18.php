<?php
	$students = array(
		array("fname"=>"Tom","lname"=>"Gray", "marks"=>"60", "age"=>"19"),
		array("fname"=>"Lena","lname"=>"Klein", "marks"=>"71", "age"=>"20"),
		array("fname"=>"Herman","lname"=>"Brown", "marks"=>"20", "age"=>"18"),
		array("fname"=>"Jack","lname"=>"Turner", "marks"=>"41", "age"=>"22"),
		array("fname"=>"Amy","lname"=>"Diaz", "marks"=>"96", "age"=>"15"),
		array("fname"=>"James","lname"=>"Bond", "marks"=>"81", "age"=>"21")
	);

	echo $students[0]["fname"] ." and ". $students[4]["fname"] ." are friends";

?>