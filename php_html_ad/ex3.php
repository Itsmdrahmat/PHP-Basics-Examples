<?php
    $index = 0;
    $computers = array(
        "computer_1" => array("ram"=>4, "processor"=>"i3", "company"=>"Arm", "status"=>"working"),
        "computer_2" => array("ram"=>32, "processor"=>"A7", "company"=>"Apple", "status"=>"working"),
        "computer_3" => array("ram"=>8, "processor"=>"i5", "company"=>"Hitachi", "status"=>"not-working"),
        "computer_4" => array("ram"=>16, "processor"=>"i7", "company"=>"IBM", "status"=>"not-working"),
        "computer_5" => array("ram"=>64, "processor"=>"i11", "company"=>"Nvidia", "status"=>"working"),
        "computer_6" => array("ram"=>48, "processor"=>"i10", "company"=>"Qualcomm", "status"=>"working"),
        "computer_7" => array("ram"=>12, "processor"=>"i5", "company"=>"Rockchip", "status"=>"not-working"),
        "computer_8" => array("ram"=>24, "processor"=>"i7", "company"=>"Samsung", "status"=>"working")
    );

    foreach($computers as $key => $com)
    {
        if($com["status"] == "not-working")
        {
            $faulty_computers[$key] = $com;
            array_splice($computers,$index,1);
            $index++;
        }
	  }

$faulty_comp_sentence = null;
    foreach($faulty_computers as $key => $faulty_comps)
    {
      $faulty_comp_sentence = $faulty_comp_sentence . $key . ", ";
    }
    $faulty_comp_sentence = rtrim($faulty_comp_sentence, ", ") . " are not working";
    echo $faulty_comp_sentence;
?>
