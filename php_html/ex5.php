<?php
    $cars_data = array(
array("company"=>"Hyundai","model"=>"verna","image_link"=>"images/hundai_verna.jpg"),
array("company"=>"Toyota","model"=>"innova-crysta","image_link"=>"images/inova_crysta.jpg"),
array("company"=>"Maruti Suzuki","model"=>"Ertiga","image_link"=>"images/suzuki_ertiga.jpg"),
array("company"=>"Honda","model"=>"City","image_link"=>"images/honda_city.jpg"),
array("company"=>"Tata","model"=>"Tigor","image_link"=>"images/tata_tigor.jpg"),
array("company"=>"Tata","model"=>"Safari","image_link"=>"images/tata_safari.jpg"),
array("company"=>"Maruti Suzuki","model"=>"Swift Desire","image_link"=>"images/swift_desire.jpg"),  			
array("company"=>"Maruti Suzuki","model"=>"Baleno","image_link"=>"images/suzuki_baleno.jpg")
    );
?>

<html>
	<body>
		<h3>car data</h3>
		<table>
		<tr> <th>Company</th> <th>Model</th> <th>image</th> </tr>
		<?php
				 echo "<tr> <td>" . $cars_data[0]["company"] ."</td>
				 <td>" . $cars_data[0]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[0]["image_link"]. ">"."</td>
				 </tr>";
				 echo "<tr> <td>" . $cars_data[1]["company"] ."</td>
				 <td>" . $cars_data[1]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[1]["image_link"]. ">"."</td>
				 </tr>";
				
				 echo "<tr> <td>" . $cars_data[2]["company"] ."</td>
				 <td>" . $cars_data[2]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[2]["image_link"]. ">"."</td>
				 </tr>";
				 
				 echo "<tr> <td>" . $cars_data[3]["company"] ."</td>
				 <td>" . $cars_data[3]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[3]["image_link"]. ">"."</td>
				 </tr>";
				 
				 echo "<tr> <td>" . $cars_data[4]["company"] ."</td>
				 <td>" . $cars_data[4]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[4]["image_link"]. ">"."</td>
				 </tr>";
				 
				 echo "<tr> <td>" . $cars_data[5]["company"] ."</td>
				 <td>" . $cars_data[5]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[5]["image_link"]. ">"."</td>
				 </tr>";
				 
				 echo "<tr> <td>" . $cars_data[6]["company"] ."</td>
				 <td>" . $cars_data[6]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[6]["image_link"]. ">"."</td>
				 </tr>";
				 
				 echo "<tr> <td>" . $cars_data[7]["company"] ."</td>
				 <td>" . $cars_data[7]["model"] . "</td>
				 <td>" ."<img src=" .$cars_data[7]["image_link"]. ">"."</td>
				 </tr>";
		?>
		</table>
		<hr>
		<table>
		<tr> <th>Company</th> <th>Model</th> <th>image</th> </tr>
		<?php
			foreach($cars_data as $car){
			echo "<tr> <td>" . $car["company"] ."</td><td>" . $car["model"] . "</td><td>" ."<img src=" .$car["image_link"]. "></td></tr>";
			}					
		?>
		</table>
	</body>
</html>