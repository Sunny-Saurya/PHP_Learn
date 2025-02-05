<?php

$myDetails = array(
    "name" => "Sunny",
    "age" => 20,
    "email" => "sunnysaurya9955@gmail.com",
    "height" => "5'7",
    "education" => "B.Tech",
);

foreach($myDetails as $key => $value){
    if($key == "age"){
        continue;
    }
    
        echo "".$key." : ".$value."<br>";
}
?>