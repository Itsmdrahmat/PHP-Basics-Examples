<?php  
    $marks=69; 	 
    if ($marks<33){    
   	 $grade = "fail";    
    }    
    elseif ($marks>=34 and $marks<50) {    
   	 $grade = "D grade";    
    }    
    elseif ($marks>=50 and $marks<65) {    
   	$grade = "C grade";   
    }    
    elseif ($marks>=65 and $marks<80) {    
   	 $grade = "B grade";   
    }    
    elseif ($marks>=80 and $marks<90) {    
   	 $grade = "A grade";    
    }  
    elseif ($marks>=90 and $marks<100) {    
   	 $grade = "A+ grade";   
    }  
   else {    
   	 $grade = "Invalid input";    
    }    
    echo $grade;
?> 
