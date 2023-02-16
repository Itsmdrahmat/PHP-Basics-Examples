<?php
    $animals = array(
  	 "dog" => array(2, 2, 4, 3, 9, 1, 3, 4),
  	 "cat" => array(6, 6, 12, 5, 10, 5, 3, 1, 12, 1),
  	 "goat" => array(8, 10, 5, 3, 6, 10, 15, 2, 12, 3, 4, 5),
  	 "cow" => array(2, 14, 20, 2, 21, 6, 10, 14, 4, 12, 20, 6, 9),
  	 "sheep" => array(3, 2, 2, 10, 10, 5, 3, 11, 9, 4, 5, 9)
);

    echo "Average age of animals are given below" . "<br /><br />";
    foreach($animals as $key => $ani)
    {
  	  $animals[$key]["avrage_age"] = round(array_sum($ani) / count($ani));
  	  echo ucwords($key) . ": " . $animals[$key]["avrage_age"] . "<br />";
    }
?>
