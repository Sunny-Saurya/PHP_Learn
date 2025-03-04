<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rgb(61, 61, 61);
            color: white;
        }
    </style>
</head>
<body>
<?php
$a = 10;
$b = 20;
echo "The sum of $a and $b is ". ($a + $b);

$name = "Sunny";
echo "<h1>My name is $name </h1>";
$subject = "PHP";
echo "<h2> I am learning $subject now </h2>";

$a = 23;
$b = 45;
echo "<h3> Sum of $a and $b is ".($a+$b)."</h3>";

function add($a, $b){
    return $a + $b;
}
echo "<h4> The sum of 23 and 45 is ".add(23, 45)."</h4>";

var_dump($a);

echo min(2,4,1,4,1,2,2,2,1,4,1,1,1,1,1,0) . "<br>";

$string = "Sunny is best ";
echo strlen($string)."<br>";
echo strrev($string)."<br>";
echo str_word_count($string)."<br>";
echo str_replace("Sunny", "Saurya", $string)."<br>";
echo strpos($string, "n")."<br>";
echo str_repeat($string, 5). "<br>";
echo str_shuffle($string). "<br>";
echo strtoupper($string). "<br>";
echo strtolower($string). "<br>";
echo ucfirst($string). "<br>";
echo lcfirst($string). "<br>";
echo ucwords($string). "<br>";
echo trim($string, "Sunny") . "<br>";
echo substr($string, 0, 5). "<br>";

// find the duplicates in the array
$myArray = array(1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9);
$uniqueArray = array_unique($myArray);
print_r($uniqueArray);
echo "<br>";
// print duplicates
$duplicates = array_diff_assoc($myArray, $uniqueArray);
print_r($duplicates);
?>
</body>
</html>