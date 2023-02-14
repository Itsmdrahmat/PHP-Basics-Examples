<html>
	<body>
		<?php
			$classes = array("English", "History", "Science"); 
			foreach($classes as $class){
				echo "Class : {$class}"."<br/>";
			}
		?>
		<hr>
		<?php
			$classes = array("English" => "Mr. Park", "History" => "Mr. Natu", "Science" => "Mr. John"); 
			foreach($classes as $class => $teacher){
				echo "{$class} is taught by {$teacher}"."<br/>";
			}
		?>
		<hr>
		<?php
			$classes = array("English" => "Mr. Park", "History" => "Mr. Natu", "Science" => "Mr. John");
			
			$students = [
				"English"=>["avery", "Johnny", "tim", "sarah"],
				"History"=>["ronnie", "george"],
				"Science"=>["alisha", "Jimmy"]
			];
			
			foreach ($classes as $class => $teacher)

			$students_list = implode($students[$class]);
			echo "{$class} is taught by {$teacher} and has the following students ($students_list)"."<br />";
						
		?>
	</body>
</html>