<?php
$string = "Hello, PHP";
$pos = strpos($string, "PHP");
if ($pos === false) {
    echo "PHP not found in the string";
} else {
    echo "PHP found in the string";
}
echo $pos;