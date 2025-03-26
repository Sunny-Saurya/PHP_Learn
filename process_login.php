<?php
session_start();
$valid_user = [ "abc" => "1111",
                "def" => "2222",
                "ghi" => "3333",
                "jkl" => "4444",
                "mno" => "5555",
                "pqr" => "6666",
                "stu" => "7777",
                "vwx" => "8888",
            ];

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($valid_user[$username]) && $valid_user[$username] === $password){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['logged_in'] = true;

    echo " Login Successful";
    header("Location: dashboard.php");
    exit;
}else{
    echo "Invalid username or password";
}
?>