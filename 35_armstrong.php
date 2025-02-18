<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $numDigits = strlen((string)$num);
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $sum == $num;
}

// Example usage
$number = 153; // You can change this number to test
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>