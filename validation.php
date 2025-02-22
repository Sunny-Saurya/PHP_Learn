<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $a = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($a){
        echo "Email is valid";
    }
    else{
        echo "Email is not valid";
    }

    if($username == "" || $password == "" || $email == ""){
        echo "<script>alert('Please fill all the fields')</script>";
    }

    // validation
    if(strlen($username) < 5){
        echo "Username must be greater than 5 characters";
    }
    if(strlen($password) < 8){
        echo "Password must be greater than 8 characters";
    }
    else{
        echo "Data submitted successfully";
    }
    
    echo "<br>";
    echo "Password: $password";
    echo "<br>";    
    echo "Email: $email";
    echo "<br>";
    echo "Username: $username";
    echo "<br>";
    echo "Data submitted successfully";
}
else{
    echo "Data not found";
}