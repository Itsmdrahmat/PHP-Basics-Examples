<?php
    $cars = array(
  	 array("company"=>"Skoda", "model"=>"Octavia", "engine"=>"1984 cc", "type"=>"Sedan"),
  	 array("company"=>"Land Rover", "model"=>"Discovery", "engine"=>"1999 cc", "type"=>"SUV"),
  	 array("company"=>"Audi", "model"=>"A4", "engine"=>"1998 cc,", "type"=>"Sedan"),
  	 array("company"=>"Audi", "model"=>"Q2", "engine"=>"1984 cc", "type"=>"SUV"),
  	 array("company"=>"Land Rover", "model"=>"Range Rover Sport", "engine"=>"1997 cc", "type"=>"SUV"),
  	 array("company"=>"Jaguar", "model"=>"F-TYPE", "engine"=>"1997 cc", "type"=>"Coupe"),
  	 array("company"=>"Skoda", "model"=>"Superb", "engine"=>"1984 cc", "type"=>"Sedan"),
  	 array("company"=>"Audi", "model"=>"Q8", "engine"=>"2995 cc", "type"=>"SUV"),
  	 array("company"=>"Land Rover", "model"=>"Range Rover Evoque", "engine"=>"2000 cc", "type"=>"SUV"),
  	 array("company"=>"Jaguar", "model"=>"XF", "engine"=>"1997 cc", "type"=>"Sedan"),
  	 array("company"=>"Skoda", "model"=>"Rapid", "engine"=>"999 cc", "type"=>"Sedan"),
  	 array("company"=>"Jaguar", "model"=>"F-Pace", "engine"=>"1997 cc", "type"=>"SUV"),
  	 array("company"=>"Land Rover", "model"=>"Velar", "engine"=>"1997 cc", "type"=>"SUV"),
  	 array("company"=>"Land Rover", "model"=>"Defender", "engine"=>"1997 cc", "type"=>"SUV"),
  	 array("company"=>"Audi", "model"=>"A6", "engine"=>"1984 cc", "type"=>"sedan"),

    );
    foreach($cars as $car)
    {
  	 switch($car["company"])
  	 {
  		 case "Skoda":
  			 $skoda[] = $car;
  		 break;
  		
  		 case "Land Rover":
  			 $land_rover[] = $car;
  		 break;
  		
  		 case "Audi":
  			 $audi[] = $car;
  		 break;
  		
  		 case "Jaguar":
  			 $jaguar[] = $car;
  	 }
    }
?>


<body>
<table>
   <tr> <th>Sr. no.</th> <th>Skoda</th> <th>Audi</th> <th>Land Rover</th> <th>Jaguar</th> </tr>
   </ol>
   <?php
   for($i=0; $i<count($cars); $i++){
      if(isset($skoda[$i]) or isset($land_rover[$i]) or isset($audi[$i]) or isset($jaguar[$i])){
  	   echo"<tr>";
  		
  	   echo"<td>" . ($i+1) . "</td>";
  					
  	   if(isset($skoda[$i])){
  	   echo "<td>" . $skoda[$i]["model"] . "</td>";
  	   }
  	   else{echo "<td></td>";}
  					
  	   if(isset($audi[$i])){
  	   echo "<td>" . $audi[$i]["model"] . "</td>";
  	   }
  	   else{echo "<td></td>";}
  		
  	   if(isset($land_rover[$i])){
  	   echo "<td>" . $land_rover[$i]["model"] . "</td>";
  	   }
  	   else{echo "<td></td>";}
  		
  	   if(isset($jaguar[$i])){
  	   echo "<td>" . $jaguar[$i]["model"] . "</td>";
  	   }
  	   else{echo "<td></td>";}
  					
  	   echo"</tr>";
  	   }
  	   else{break;}
  	   }
  	?>
</table>
