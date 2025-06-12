<?php

session_start(); // Start the session
if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['age'])) {
    // Check if session variables are set
    echo "Session Variables:<br>";
    echo "Welcome, ".$_SESSION['username']."<br>";
    echo "Email: ".$_SESSION['email']."<br>";
    echo "Age: ".$_SESSION['age']."<br>";
} else {
    echo "Please set session variables first using <a href='session.php'>session.php</a>.<br>";
}

?>