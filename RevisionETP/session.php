<?php

session_start();
$_SESSION['username'] = "Sunny";
$_SESSION['email'] = "sunny@gmail.com";
$_SESSION['age'] = 20;

echo "Session variables are set.<br>";
echo "You can check the session variables using the <a href='session_getData.php'>session_getData.php</a> script.<br>";
?>