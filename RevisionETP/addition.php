<?php
$a = 5;
$b = 10;

echo "The sum of $a and $b is : ". ($a + $b) . "<br>";
echo "The difference of $a and $b is : ". ($a - $b) . "<br>";
echo "The product of $a and $b is : ". ($a * $b) . "<br>";

if($b != 0) {
    echo "The division of $a and $b is : ". ($a / $b) . "<br>";
} else {
    echo "Division by zero error<br>";
}

echo "The remainder of $a and $b is : ". ($a % $b) . "<br>";
?>
