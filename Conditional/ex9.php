<?php
    $continent = "Asia";
    switch($continent){
   		 
   		 case "Europe":
   		 echo "population of " . $continent . " is 74.64 crores";
   		 break;

   		 case "Asia":
   		 echo "the population of " . $continent . " is 456.07 crores";
   		 break;

   		 case "South America":
   		 echo "the population of " . $continent . " is 42.25 crores";
   		 break;

   		 case "North America":
   		 echo "the population of " . $continent . " is 57.9 crores";
   		 break;

   		 case "Africa":
   		 echo "the population of " . $continent . " is 121.61 crores";
   		 break;

   		 case "Antarctica":
   		 echo "the population of " . $continent . " is 1,000";
   		 break;

   		 case "Oceania":
   		 echo "the population of " . $continent . " is 5.49 lacs";
   		 break;   	 
   		 
   		 default:
   		 echo "Invalid continent";
	}
?>
