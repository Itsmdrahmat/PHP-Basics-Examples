<?php
    $employees = array(
  	 array("name"=>"Vaneet","salary"=>25000),
  	 array("name"=>"Shivani","salary"=>18000),
  	 array("name"=>"Tara","salary"=>22000),
  	 array("name"=>"Darshan","salary"=>16000),
  	 array("name"=>"Sudhir","salary"=>10000),
  	 array("name"=>"Vishal","salary"=>30000)
    );
    for($i=0; $i<count($employees); $i++)
    {
  	 $employees[$i]["tds"] = ($employees[$i]["salary"] * 10) / 100;
  	 $employees[$i]["net_salary"] = $employees[$i]["salary"] - $employees[$i]["tds"];
    }
print_r($employees);
?>