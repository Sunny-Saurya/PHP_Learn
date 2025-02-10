<?php
$courseso = array("Php", 'Laravvel ', "Node js ", "Html", "css");
print_r($courseso,2);

$courses = array(
    "a" => "php",
    "b"=> "laravel",
    "c"=> "nodejs",
    "d"=> "html",
    "e"=> "css",
    "f" => "Asp.net",
);
print_r(array_chunk($courses, 2));

echo"<br>";
$courseso = array(
    "a"=> "php",
    "b"=> "Laravel",
    "c" => "nodejs",
    "d"=> "html",
    "e"=> "css",
    "f" => "Asp.net"
);
print_r(array_chunk($courseso, 2, true));