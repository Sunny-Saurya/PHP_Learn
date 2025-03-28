<?php
session_start();

if (!isset($_SESSION['click_count'])) {
    $_SESSION['click_count'] = 0;
}

// Increment counter on button click
if (isset($_POST['click'])) {
    $_SESSION['click_count']++;
}

// Reset counter
if (isset($_POST['reset'])) {
    $_SESSION['click_count'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Click Counter</title>
</head>
<body>
    <h1>Click Counter</h1>
    <p>Click count: <?php echo $_SESSION['click_count']; ?></p>
    
    <form method="post">
        <button type="submit" name="click">Click Me</button>
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>