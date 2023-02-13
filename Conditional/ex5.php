<?php
	// speed given in km/h
	$speed = 130;
	if($speed <= 80)
	{
		echo "vehicle speed is correct";
	}
	elseif($speed > 80 and $speed < 110)
	{
		echo "vehicle speed is a bit over guidelines";
	}
	else
	{
		// if speed is greater than 110 km/h
		echo "vehicle speed is dangerous, must slow down";
	}
?>
