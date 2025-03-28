<?php
$options = array('option' => array('min_range' => 0, 'max_range' => 100));
$number = 50;
if (filter_var($number, FILTER_VALIDATE_INT, $options)) {
    echo "This is a valid number";
} else {
    echo "This is not a valid number";
}

$ip = "192.168.1.1";
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    echo "This is a valid IP address";
} else {
    echo "This is not a valid IP address";
}
?>