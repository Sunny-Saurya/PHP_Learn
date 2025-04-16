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

// stristr function
$name = "Sunny kumar Saurya";
$substring = stristr($name, "kumar");
echo $substring . "\n";

// str_repeat() function
$string = "Hello, PHP";
$newString = str_repeat($string, 3);
echo $newString . "\n";

// str_expode() function
$string5 = "Hello, PHP, Java, Python";
$words = explode(",", $string5);
print_r($words);

// str_split() function
$string = "Hello, PHP";
$chars = str_split($string);
print_r($chars);

// preg_grep function
$word = ["PHP", "Java", "Python"];
$pattern = "/P/";
$matches = preg_grep($pattern, $word);
print_r($matches);

//preg_grep_invert function
$word = ["PHP", "Java", "Python"];
$pattern = "/P/";
$matches = preg_grep($pattern, $word, PREG_GREP_INVERT);
print_r($matches);

// prag_match_all function 
$pattern = "/P/";
$string = "Hello, Java, Python";
preg_match_all($pattern, $string, $matches);
print_r($matches);


?>