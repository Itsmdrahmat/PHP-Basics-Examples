<?php
            $customers = array(
                array("name"=>"Emily", "subscription"=>"yearly", "request"=>"no"),
                array("name"=>"jack", "subscription"=>"yearly", "request"=>"yes"),
                array("name"=>"Mark", "subscription"=>"monthly", "request"=>"yes"),
                array("name"=>"Johnny", "subscription"=>"monthly", "request"=>"no"),
                array("name"=>"Chris", "subscription"=>"yearly", "request"=>"yes"),
                array("name"=>"Harry", "subscription"=>"yearly", "request"=>"yes"),
                array("name"=>"Larry", "subscription"=>"monthly", "request"=>"yes"),
                array("name"=>"Megan", "subscription"=>"yearly", "request"=>"no"),
                array("name"=>"Rusty", "subscription"=>"monthly", "request"=>"no"),
                array("name"=>"Stanley", "subscription"=>"yearly", "request"=>"yes")
                );

            foreach($customers as $customer)
{   
                if ($customer["subscription"] == "yearly" and $customer["request"] == "yes")
                {
                    $receivers[] = $customer["name"];
                }
            }
//inside <body>           
            echo "</h3>The following customers will receive a special book every month</h3>";
            echo "<ol>";
            foreach($receivers as $receiver)
            {
                echo "<li>". $receiver . "</li>";
            }
            echo "</ol>";
?>
