<?php
function customFilter($name){
    return strtoupper($name);
}
$name = "sunny saurya";
$filteredName = customFilter($name);
echo $filteredName;
?>