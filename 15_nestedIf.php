<?php
// nested if
$a = 1;
$b = 1;
if ($a == $b) {
    echo "this is equal";
    if ($a > 0 && $b > 0) {
        echo "This number is positive";
    }
}
?>