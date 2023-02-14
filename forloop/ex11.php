<?php
    $planets = array("Mercury", "venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune");
    
    echo "The planets in our solar system are: ";
    for($i=0; $i<count($planets); $i++)
    {
   	 if($i == count($planets)-1)
   	 {
   		 echo $planets[$i];
   	 }
   	 else{echo $planets[$i] . ", ";}
    }  
?>
