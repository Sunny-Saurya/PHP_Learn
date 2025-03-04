<?php
$lang = array('C', 'C++', 'R', 'HTML', 'PHP', 'JAVA');
var_dump($lang);
$arr = ["one", "two", "three", "four"];
print_r($arr);

$ar = ["one" => "1", "two" => "2", "three" => "3", "four" => "4"];
print_r($ar);

foreach ($ar as $key => $value) {
    # code...
    echo $key . " => " . $value . "\n";
}