<?php
    $cars = array(
   	 array("brand"=>"kia","model"=>"Seltos","type"=>"SUV"),
   	 array("brand"=>"Skoda","model"=>"Octavia","type"=>"sedan"),
   	 array("brand"=>"Porsche","model"=>"911","type"=>"coupe")
   			 
    );

    for($i=0; $i<count($cars); $i++)
    {
   	 echo $cars[$i]["model"] . " is a ".$cars[$i]["type"]." car manufactured by " . $cars[$i]["brand"] . "<br /><br />";

    }
?>
