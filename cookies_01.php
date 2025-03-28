<?php
$cookie_name = "user";
$cookie_value = "abc";
setcookie($cookie_name, $cookie_value, time() + 3600,  "/");

if(isset($_COOKIE["user"])){
    echo "Welcome ". $_COOKIE["user"];
}
else{
    echo "Welcome Guest";
}
?>