<?php
$courses = array("php", "laravel", "Node.js");
echo"I like". $courses[0]. ",".$courses[1]. "and".$courses[2]."";
echo "<br>";
echo count($courses);

$courses = array("php", "laravel", "Node js");
$coursesLne = count($courses);

for($x = 0; $x < $coursesLne; $x++){
    echo $courses[$x];
    echo "<br>";
}

$courses = array("php", "larvel", "nodejs");
foreach($courses as $course){
    echo " ".$course." ";
}
