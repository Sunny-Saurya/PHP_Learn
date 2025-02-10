<?php
$a1 = array(
    "a" => "red",
    "b"=> "greemn",
    "c"=> "blue",
    "d"=> "yellow",
);
$a2 = array(
    "e"=> "red",
    "f" => "greemn",
    "g" => "blue",
);

$resutl = array_diff($a1, $a2);
print_r($resutl); 