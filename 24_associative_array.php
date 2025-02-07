<?php
$courses = array(
    "INT220" => "PHP",
    "INT221"=> "Java",
    "INT222"=> "Nodejs",
);
echo"INT 220 is ".$courses['INT220']. "<br>"."INT 221 is ". $courses['INT221']. " ";

$courses["INT220"] = "PHP";
$courses["INT221"] = "Java";
$courses["INT222"] = "Nodejs";

print_r($courses);

