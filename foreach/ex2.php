<html>
	<body>
		<?php
			$names = array("manju", "ravi", "rama"); 
			foreach($names as $value){
				echo $value."<br/>";
			}
		?>
		<hr>
		<?php
			$names = array("manju", "ravi", "rama"); 
			foreach($names as $key => $value){
				echo $key." - ".$value."<br/>";
			}
		?>
		<hr>
		<?php
			$names = array("first" => "manju", "second" => "ravi", "third" => "rama"); 
			foreach($names as $key => $value){
				echo $key." - ".$value."<br/>";
			}
		?>
	</body>
</html>