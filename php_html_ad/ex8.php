<?php
foreach($classes as $class => $students){
	echo "<h3>Class ".$class."</h3><table class='table'><thead><tr><th>First Name</th><th>Last Name</th><th>Marks</th> 
      <th>Age</th></tr></thead><tbody>";
	
	foreach($students as $student){
		echo "<tr><td>".$student["fname"]."</td><td>".$student["lname"]."</td><td>".$student["marks"]."</td><td>".
            $student["age"]."</td></tr>";
	}
	
      echo "</tbody></table> <br /><br /><br /><br />";
}
?>
