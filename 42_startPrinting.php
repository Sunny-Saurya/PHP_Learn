<?php
$row = 5;
$col = 5;

for($i = 0; $i < $row; $i++){
    for($j = 1; $j <= $i+1; $j++){
        echo $j." ";
    }
    echo "<br>";

}
?>