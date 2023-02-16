<?php
  	 $attendance_records = array(
  		 array("month"=>"June","present_days"=>13,"total_days"=>20),
  		 array("month"=>"July","present_days"=>16,"total_days"=>20),
  		 array("month"=>"August","present_days"=>11,"total_days"=>20),
  		 array("month"=>"september","present_days"=>20,"total_days"=>20),
  		 array("month"=>"October","present_days"=>19,"total_days"=>20),
  		 array("month"=>"November","present_days"=>12,"total_days"=>20),
  		 array("month"=>"December","present_days"=>15,"total_days"=>20),
  		 array("month"=>"January","present_days"=>8,"total_days"=>20),
  		 array("month"=>"February","present_days"=>14,"total_days"=>20),
  		 array("month"=>"March","present_days"=>17,"total_days"=>20)
  	 );
?>

//inside <body>
<h3>Attendance record</h3>   
    <table>
    	<tr> <th>Month</th> <th>Present days</th> <th>Absent days</th> <th>Total days</th> <th>Obtained Marks</th> </tr>
    	<?php
  		 $total_present_days = null;
  		 $total_absent_days = null;
  		 $total_days = null;
  		 $total_marks = null;
  		
        	for($i = 0; $i<count($attendance_records); $i++){
            	echo "<tr><td>" . $attendance_records[$i]["month"] ."</td>
                  <td>" . $attendance_records[$i]["present_days"] . "</td> 
                  <td>" . ($attendance_records[$i]["total_days"] - $attendance_records[$i]["present_days"]) ."</td>
            	<td>" .$attendance_records[$i]["total_days"]. "</td><td>". $attendance_records[$i]["present_days"]/10 
                  ."</td></tr>";
          	
            	$total_present_days += $attendance_records[$i]["present_days"];
            	$total_absent_days += $attendance_records[$i]["total_days"]-$attendance_records[$i]["present_days"];
            	$total_days += $attendance_records[$i]["total_days"];
            	$total_marks += $attendance_records[$i]["present_days"]/10;
        	}
    	echo "<tr class='bold'><td>Total</td><td> $total_present_days </td><td> $total_absent_days </td><td> $total_days </td><td> $total_marks </td></tr>";
?>
</table>
