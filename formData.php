<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $a = filter_var($email,FILTER_VALIDATE_EMAIL);
        if($a){
            echo "Email is valid";
        }
        else{
            echo "Email is not valid";
        }

        if($username == "" || $email == "" || $password == ""){
            echo "Please feild all the inputs";
        }
        if(strlen($username) < 5){
            echo "Please input valid name";
        }
        if(strlen($password) < 8){
            echo "Please input valid password";
        }
    }
    else{
        echo "Data invalid";
    }
?>
