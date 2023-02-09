<?php 

	$var1 = null;
	$var2 = "";
	$var3 = "hello world";

	if(isset($var1) == true){
		echo "$var1 has been declared <br />";
	}
	else{
		echo "$var1 has either not been declared or has the value of null<br />";
	}

	if(isset($var2) == true){
		echo "$var2 has been declared<br />";
	}
	else{
		echo "$var2 has either not been declared or has the value of null<br />";
	}

	if(isset($var3) == true){
		echo "$var3 has been declared<br />";
	}
	else{
		echo "$var3 has either not been declared or has the value of null<br />";
	}

	if(isset($var4) == true){
		echo "$var4 has been declared<br />";
	}
	else{
		echo "$var4 has either not been declared or has the value of null<br />";
	}
?>