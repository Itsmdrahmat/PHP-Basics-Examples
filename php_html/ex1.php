<?php
$paragraph = "The Taj Mahal 'Crown of the Palace' is an ivory-white marble mausoleum on the southern bank of the river Yamuna in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan";
?>

<html>
	<body>
		<p>
			<?php echo $paragraph; ?>
		</p>
		<hr>
		<?php echo "<p>" . $paragraph . "</p>";  ?>
	 </body>
</html>
