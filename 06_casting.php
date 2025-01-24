<?php
$a = 5;
$b = 3.5;
$c = "Hello, world";
$d = true;
$e = NULL;

// casting it into some another type

$a = (string) $a  ;
$b = (integer) $b;
$c = (float) $c;
$d = (string) $d;

// printing it out

var_dump($a) ;

var_dump($b) ;

var_dump($c) ;

var_dump($d) ;

// now printing what var_dump returns for other data types

var_dump(40);
var_dump("Sunny weather");
var_dump((2.22));
var_dump("false");
var_dump([12,14,5]);
var_dump(NULL);

$x = $y = $z = "letters";
echo $x;
echo $y;
echo $z;

// to check for datatype
is_int(40);
is_long(234234);
is_float(2.33);

?>
