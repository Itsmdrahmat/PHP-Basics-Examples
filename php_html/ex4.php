<html>
	<body>
		<h3>List of school kit</h3>
		 <?php
			 $menu = array("bag","Rain coat","shoes","Sports shoes","pencil box","books");
		   
		 echo "<ul>
			 <li>".  $menu[0] ."</li>
			 <li>".  $menu[1] ."</li>
			 <li>".  $menu[2] ."</li>
			 <li>".  $menu[3] ."</li>
			 <li>".  $menu[4] ."</li>
			 <li>".  $menu[5] ."</li>
			 </ul>"
		 ?>
		<br>
		<h3>List of school kit (Using Loop)</h3>
		<ul>
		<?php
		foreach($menu as $thing){
		   echo "<li>".$thing."</li>";
		}
		?>
		</ul>

	</body>
</html>