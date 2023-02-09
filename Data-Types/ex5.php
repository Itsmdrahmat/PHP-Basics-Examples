<?php 

	$user_age=21;
	$is_int = is_int($user_age);

	if($is_int == true)
	{
		echo "The age is valid";
	}
	else
	{
		echo "The age is invalid";
	}
?>