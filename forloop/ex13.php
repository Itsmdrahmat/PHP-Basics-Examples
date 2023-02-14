<html>
    <body>
   	 <?php
   	 $students = array(
   					 array("fname"=>"Tom","lname"=>"Gray", "marks"=>"60", "age"=>"19"),
   					 array("fname"=>"Lena","lname"=>"Klein", "marks"=>"71", "age"=>"20"),
   					 array("fname"=>"Herman","lname"=>"Brown", "marks"=>"20", "age"=>"18"),
   					 array("fname"=>"Jack","lname"=>"Turner", "marks"=>"41", "age"=>"22"),
   					 array("fname"=>"Amy","lname"=>"Diaz", "marks"=>"96", "age"=>"15"),
   					 array("fname"=>"James","lname"=>"Bond", "marks"=>"81", "age"=>"21"),
   					 array("fname"=>"Julia","lname"=>"Roberts", "marks"=>"67", "age"=>"17"),
   					 array("fname"=>"Jessica","lname"=>"Robinson", "marks"=>"79", "age"=>"23"),
   					 array("fname"=>"Peter","lname"=>"Watson", "marks"=>"57", "age"=>"25"),
   					 array("fname"=>"Albert","lname"=>"Morris", "marks"=>"25", "age"=>"24")
   	 );
   	 echo "<ol>";
   	 for($i=0; $i<count($students); $i++)
   	 {
   		 if(strlen($students[$i]["fname"]) > 4)
   		 echo "<li>" .$students[$i]["fname"]. "</li>";
   	 }
   	 echo "</ol>";
   	 ?>
    </body>
</html>
