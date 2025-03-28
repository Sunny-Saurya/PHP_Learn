<?php
$data = array("email" => "test@example.com", "age" => "30");
$filters = array("email" => FILTER_VALIDATE_EMAIL, "age" => array("filter" => FILTER_VALIDATE_INT, "options" => array("min_range" => 1, "max_range" => 120)));
$filteredData = filter_var_array($data, $filters);
var_dump($filteredData);
?>