<?php
$default_theme = "light";
if(isset($_POST['theme'])){
    setcookie('user_theme', $_POST['theme'], time()+ 3600, "/");
}

if(isset($_POST['reset'])){
    setcookie('user_theme', $default_theme, time()+ 3600, "/");
}

$current_theme = isset($_COOKIE["user_theme"])?$_COOKIE["user_theme"]: $default_theme;
?>
<html>
    <head>
        <style>
            body {
                background-color: <?php echo $current_theme == "light"? "white": "black"; ?>;
                color: <?php echo $current_theme == "light"? "black": "white"; ?>;
                transition: background-color 0.5s ease, color 0.5s ease;
                font-family: Arial, sans-serif;
            }
            h1 {
                text-align: center;
                font-size: 2.5em;
                margin-top: 20px;
                animation: fadeIn 2s;
            }
            h2 {
                text-align: center;
                font-size: 1.5em;
                margin-top: 20px;
                animation: fadeIn 2s;
            }
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 20px;
                animation: fadeIn 2s;
            }
            label, select, input {
                margin: 10px;
                font-size: 1.2em;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        </style>
    </head>
    <body>
        <h1>Theme Switcher</h1>
        <form method="POST">
            <label for="theme">Choose a theme:</label>
            <select name="theme" id="theme">
                <option value="light" <?php if($current_theme == "light") echo "selected"; ?>>Light</option>
                <option value="dark" <?php if($current_theme == "dark") echo "selected"; ?>>Dark</option>
            </select>
            <input type="submit" value="Save">
            <input type="submit" name="reset" value="Reset">
        </form>
        <h2>Current Theme: <?php echo $current_theme; ?></h2>
    </body>
</html>