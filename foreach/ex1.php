<html>
	<body>
		<?php

			$animals = array("Antelope" => "Snorts", "Bat" => "Screeches", "Bear" => "Roars", "Dolphin" => "Clicks", "Goose" => "Honks", "Vulture" => "Screams");

			foreach($animals as $name){
				echo $name. "<br />";
			}
		?>
		
		<hr>
		
		<?php

			$animals = array("Antelope" => "Snorts", "Bat" => "Screeches", "Bear" => "Roars", "Dolphin" => "Clicks", "Goose" => "Honks", "Vulture" => "Screams");

			foreach($animals as $name => $sound){
				echo $animals[$name]. "<br />";
			}
		?>
		
		<hr>
		
		<?php

			$animals = array("Antelope" => "Snorts", "Bat" => "Screeches", "Bear" => "Roars", "Dolphin" => "Clicks", "Goose" => "Honks", "Vulture" => "Screams");

			foreach($animals as $name => $sound){
				echo $name." ".$sound. "<br />";
			}
		?>
		
		<hr>
		
		<?php
			$numbers = array(1,2,3,4,5);
			print_r($numbers);
			foreach ($numbers as &$number){
				$number = $number* 2;
			}

			echo "<br/>";
			print_r($numbers);
		?>
		
	</body>
</html>