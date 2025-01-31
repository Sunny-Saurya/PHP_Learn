<?php

date_default_timezone_set("Asia/Kolkata");
$d = date("D");
if($d == "Fri"){
    echo "It's Friday";
}


    $t = date("H");
    $m = date("i");
    $a = date(": ");
    echo "<br>";
    echo $t;
    echo $a;
    echo $m;
    echo "<br>";
    if($t < "20"){
        echo "Have a good day !!";

    }

    $t = date("y");
    $m = date("m");
    $d = date("d");
    $a = date(":");
    echo "<br>";
    echo $t;
    echo $a;
    echo $m;
    echo $a;
    echo $d;
    echo "<br>";

    $t = date("H");
    if($t < "20"){
        echo "Have a good day";
    }
    else{
        echo "Have a good night";
    }
?>
