<html>
	<head>
		<style>
			table, th, td {
			border: 1px solid black;
			}
			table {
			border-collapse: collapse;
			}
			th{
			padding-right: 10px;
			padding-left: 10px;
			}
		</style>
	</head>
	<body>
		<?php
			$lighting_drums = array(
				"texas"=>array("total_seats"=>"800","booked_seats"=>"773","time"=>"8:30 pm"),
				"california"=>array("total_seats"=>"1000","booked_seats"=>"805","time"=>"9:00 pm"),
				"sydney"=>array("total_seats"=>"2000","booked_seats"=>"1684","time"=>"10:30 pm"),
				"dubai"=>array("total_seats"=>"2500","booked_seats"=>"2204","time"=>"7:00 pm"),
				"goa"=>array("total_seats"=>"1200","booked_seats"=>"1104","time"=>"10:00 pm")
			);
		?>
		<h3>concert schedule of lighting drums</h3>
		<table>
			<tr> <th>total seats</th> <th>booked seats</th> <th>concert time</th></tr>
			<?php
				echo "<tr><td>" . $lighting_drums["texas"]["total_seats"] . "</td><td>" . $lighting_drums["texas"]["booked_seats"] . "</td><td>" .
				$lighting_drums["texas"]["time"] . "</td></tr>";
				echo "<tr><td>" . $lighting_drums["california"]["total_seats"] . "</td><td>" . $lighting_drums["california"]["booked_seats"] . "</td><td>" .
				$lighting_drums["california"]["time"] . "</td></tr>";
				echo "<tr><td>" . $lighting_drums["sydney"]["total_seats"] . "</td><td>" . $lighting_drums["sydney"]["booked_seats"] . "</td><td>" .
				$lighting_drums["sydney"]["time"] . "</td></tr>";
				echo "<tr><td>" . $lighting_drums["dubai"]["total_seats"] . "</td><td>" . $lighting_drums["dubai"]["booked_seats"] . "</td><td>" .
				$lighting_drums["dubai"]["time"] . "</td></tr>";
				echo "<tr><td>" . $lighting_drums["goa"]["total_seats"] . "</td><td>" . $lighting_drums["goa"]["booked_seats"] . "</td><td>" .
				$lighting_drums["goa"]["time"] . "</td></tr>";
			?>
		</table>
	</body>
</html>
