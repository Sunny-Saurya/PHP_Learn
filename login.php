<?php
session_start();
?>

<html>
    <head><title>Login</title></head>
    <body>
        
        <h2>
            Login Form
        </h2>

        <form action="process_login.php" method="post">
            <label for="">Enter Username: </label>
            <input type="text" name = "username" required>
            <label for="">Password: </label>
            <input type="text" name = "password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </body>
</html>