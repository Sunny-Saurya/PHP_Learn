<?php

$arr1 = array("red", "green", "blue", "yellow", "pink", "purple");
$arr2 = array("orange", "brown", "black", "white", "grey", "cyan", "purple", "yellow");

$mergedArray = array_merge($arr1, $arr2);
print_r($mergedArray);
echo "<br>";

$uniqueArray = array_unique($mergedArray);
print_r($uniqueArray);
echo "<br>";

// $arrayCombine = array_combine($arr1, $arr2); // combine two arrays with key and value like key => value as associative array

// print_r($arrayCombine);
// echo "<br>";

$value = array_chunk($arr1, 2); // split array into chunks of 2 elements each
print_r($value);

$count = array_count_values($arr1); // count the number of values in array
print_r($count);

$array = array_diff($arr1, $arr2); // compare two arrays and return the difference between them
print_r($array);


$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2));

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr); // join array elements with space


$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str)); // split string into array using space as delimiter

$input = [0, 1, false, 2, '', 3, null];
$result = array_filter($input);

print_r($result);
