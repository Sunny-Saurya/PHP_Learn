<?php
$num1 = 10;
$num2 = 5;
$operation = "add"; 

switch ($operation) {
    case "add":
        $result = $num1 + $num2;
        break;
    case "subtract":
        $result = $num1 - $num2;
        break;
    case "multiply":
        $result = $num1 * $num2;
        break;
    case "divide":
        $result = ($num2 != 0) ? $num1 / $num2 : "Error: Division by zero";
        break;
    default:
        $result = "Invalid operation";
}

echo "Result: $result";
?>
