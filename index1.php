<?php include './connect.php' ?>
<?php
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $problem=$_POST['problem'];
    $sql = "INSERT INTO story (name, problem) VALUES ('$name', '$problem')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data submitted successfully";
    }
    else{
        echo "there is a problem";
    }
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $problem;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Name</label>
        <input type="name" placeholder="my name is " name="name">
        <br>
        
        <label>Issue</label>
        <input type="name" placeholder="the issue is " name="problem"><br>
        <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html> 