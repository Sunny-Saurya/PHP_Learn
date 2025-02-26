<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $error=[];
    if(empty($_POST["name"])){
        $error["name"]="Name is required";
    }
    else{
        $name=htmlspecialchars(strip_tags(trim($_POST["name"])));
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $error["name"]="Only letters and white space allowed";
        }
    }
    if(empty($_POST["email"])){
        $error[] = "Email is required";
    }
    else{
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error[] = "INvalid email format";
        }
    }
    if(empty($error)){
        echo "Data received, the name is $name and email is $email";
    }
    else{
        foreach($error as $e){
            echo "<p style = 'color:red;'>$e</p>";
        }
    }
}
?>