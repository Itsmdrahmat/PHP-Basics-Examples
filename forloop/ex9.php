<?php
	echo "Odd factors of 200:" . "<br />";
	$sum = null;
	for($i=1; $i<=234; $i++)
	{
		if (200 % $i == 0 and $i % 2 !== 0)
		{
			echo $i . "<br />";
		}
	}
?>
