<?php
$num1 = 15;
$num2 = 3;

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero";

echo "Numbers: $num1, $num2\n";
echo "Addition: $sum\n";
echo "Subtraction: $difference\n";
echo "Multiplication: $product\n";
echo "Division: $quotient\n";
?>
