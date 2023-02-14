<?php
	echo "Factors of 60:" . "<br />";
	for($i=1; $i<=33; $i++)
	{
		if (60 % $i == 0)
		{
			echo $i . "<br />";
		}
	}
?>
