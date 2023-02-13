<?php
    $month = "August";
    switch($month){
   		 case ($month == "january" or $month == "March" or $month == "May" or $month == "July" or $month == "August" or $month == "October " or $month == "December"):
   		 echo "the month " . $month . " has 31 days";
   		 break;
   		 
   		 default:
   		 echo "the month " . $month . " has 30 days";
	}
?>
