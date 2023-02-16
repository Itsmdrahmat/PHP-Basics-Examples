<html>
	<body>
		<h3>List of breakfast items</h3>
		<?php
			$menu = array("upma","masala dosa","boiled eggs","bread jam","sheera","medu vada","sandwich");
		      echo "<ol>
			 <li>".  $menu[0] ."</li>
			 <li>".  $menu[1] ."</li>
			 <li>".  $menu[2] ."</li>
			 <li>".  $menu[3] ."</li>
			 <li>".  $menu[4] ."</li>
			 <li>".  $menu[5] ."</li>
			 <li>".  $menu[6] ."</li>
			 </ol>";
		?>
		<hr>
		<h3>List of breakfast items (Alternative)</h3>
		<?php $menu = array("upma","masala dosa","boiled eggs","bread jam","sheera","medu vada","sandwich"); ?>
			<ol>
			 <li><?php echo $menu[0]; ?></li>
			 <li><?php echo $menu[1]; ?></li>
			 <li><?php echo $menu[2]; ?></li>
			 <li><?php echo $menu[3]; ?></li>
			 <li><?php echo $menu[4]; ?></li>
			 <li><?php echo $menu[5]; ?></li>
			 <li><?php echo $menu[6]; ?></li>
		</ol>
		<hr>
		<h3>List of breakfast items ( with loop )</h3>
		<ol>
		<?php 
		   foreach($menu as $item){echo "<li>".$item."</li>";}
		?>
		</ol>


	</body>
</html>