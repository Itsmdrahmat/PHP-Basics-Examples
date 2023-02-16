<?php
	$paragraph = "The br tag is used";
	$paragraph_2 = " to line break";
?>

<html>
	<body>
		<?php echo  $paragraph ."<br />". $paragraph_2 ;  ?>
		<hr>
		<p> <?php echo $paragraph; ?>  <br />  <?php echo $paragraph_2; ?></p>
	</body>
</html>
