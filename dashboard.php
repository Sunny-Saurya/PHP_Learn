<?php

session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
    echo " Access Denied";
    // exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
