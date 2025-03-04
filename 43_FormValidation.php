<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if($num1 == "" || $num2 == ""){
            echo "Please fill all the inputs";
        }
        else{
            echo "Sum of two numbers is: " . ($num1 + $num2);
        }
    }
    else{
        echo "Data invalid";
    }
?>