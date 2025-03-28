<?php
$string = "Hello, PHP";
$pos = strpos($string, "PHP");
if ($pos === false) {
    echo "PHP not found in the string \n";
} else {
    echo "PHP found in the string \n";
}

echo $pos."\n";
// str_startS_with() function

$string = "Hello, PHP";
if (str_starts_with($string, "Hello")) {
    echo "String starts with Hello \n";
} else {
    echo "String does not start with Hello \n";
}

// str_ends_with() function

$string = "Hello, PHP";
if (str_ends_with($string, "PHP")) {
    echo "String ends with PHP \n";
} else {
    echo "String does not end with PHP \n";
}

// str_contains() function
$string2 = "Hello, PHP";
if (str_contains($string2, "PHP")) {
    echo "String contains PHP \n";
} else {
    echo "String does not contain PHP\n";
}

// str_replace() function
$string = "Hello, PHP";
$newString = str_replace("PHP", "Java", $string);
echo $newString . "\n";

// str_ireplace() function
$string = "Hello, PHP";
$newString = str_ireplace("php", "Java", $string);
echo $newString . "\n";

// str_substr() function
$name = "Sunny Saurya";
$substring = substr($name, 6);
echo $substring . "\n";

// strstr function
$name = "Sunny kumar Saurya";
$substring = strstr($name, "kumar");
echo $substring . "\n";
?>