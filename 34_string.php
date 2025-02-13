<?php
$text = "Hello, PHP!";

// String length
$length = strlen($text);

// Convert to uppercase
$uppercase = strtoupper($text);

// Convert to lowercase
$lowercase = strtolower($text);

// Reverse the string
$reversed = strrev($text);

// Replace a word
$replaced = str_replace("PHP", "World", $text);

// Find a word position
$position = strpos($text, "PHP");

echo "Original String: $text\n";
echo "Length: $length\n";
echo "Uppercase: $uppercase\n";
echo "Lowercase: $lowercase\n";
echo "Reversed: $reversed\n";
echo "Replaced: $replaced\n";
echo "Position of 'PHP': $position\n";
?>
