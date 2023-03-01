<?php
	$str = "the quick brown fox";
	$str2 = "jumped over the brown dog";
	$str = str_replace("the","that",$str);
	$str2 = str_replace("lazy","brown",$str2);
	echo $str ."&nbsp;". $str2;
?>