<?php
	$sum = null;
	for($i=5; $i<=20; $i++)
    	{
        	if($i % 2 !== 0)
        	{
            	$sum += $i;
        	}
    	}
	echo $sum;
?>
