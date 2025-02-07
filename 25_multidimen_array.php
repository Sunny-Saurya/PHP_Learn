<?php
$resutl = array(
    array("Manoj", 7.8, "passs"),
    array("Aditya", 8.5,"pass"),
    array("Anuj", 3.8,"fail"),
);
for($row = 0; $row < count($resutl); $row++){
    echo "<h3> Row Number $row </h3>";
    for($col = 0; $col < count($resutl[$row]); $col++){
        echo $resutl[$row][$col]."<bt>";
    }
}