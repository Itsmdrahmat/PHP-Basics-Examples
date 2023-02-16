<?php
    $fname = "Peter";
    $lname = "Watson";
    $dob = "16-07-2001";
    $roll_no = 21;

    $student_marks = array(
                array("subject"=>"English Grammar","obtained_marks"=>63,"total_marks"=>80),
                array("subject"=>"Mathematics","obtained_marks"=>70,"total_marks"=>80),
                array("subject"=>"Geography","obtained_marks"=>52,"total_marks"=>80),
                array("subject"=>"Science","obtained_marks"=>59,"total_marks"=>80),
                array("subject"=>"History","obtained_marks"=>69,"total_marks"=>80),
                array("subject"=>"Economics","obtained_marks"=>77,"total_marks"=>80),
                array("subject"=>"Art","obtained_marks"=>55,"total_marks"=>80),
                array("subject"=>"Music","obtained_marks"=>66,"total_marks"=>80),
    );
?>
<html>
<body>
      <?php
         echo "Name: " . $fname ." ". $lname . "<br />";
         echo "Date of birth: " . $dob . "<br />";
         echo "age: " . date_diff(date_create($dob),date_create(date("Y/m/d")))->format("%Y")."<br />";
         echo "Roll no: " . $roll_no."<br />"."<br />";
       ?>
       <table>
          <tr> <th>Sr.no</th> <th>Subject</th> <th>Obtained Marks</th> <th>Total Marks</th> <th>Percentage</th> </tr>
          <?php
	       $i = 1;
	       $total_obtained_marks = null;
	       $total_marks = null;
	       foreach($student_marks as $marks){
	          echo "<tr><td>".$i."</td><td>".$marks["subject"]."</td><td>".$marks["obtained_marks"]."</td>
                <td>".$marks["total_marks"]."</td>
                <td>".round(($marks["obtained_marks"]*100)/$marks["total_marks"],2)."%"."</td></tr>";
			 
		    $total_obtained_marks += $marks["obtained_marks"];
		    $total_marks += $marks["total_marks"];
		    $i++;
             }
           echo "<tr><td></td><td>Total</td><td>$total_obtained_marks</td><td>$total_marks</td>
           <td>".round(($total_obtained_marks*100)/$total_marks,2)."%"."</td></tr>";
		?>
	</table>
	</body>
</html>
