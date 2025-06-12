<?php
echo "Setting Cookies<br>";

setcookie("user", "Sunny Kumar", time() + 86400, "/"); // 86400 seconds = 1 day
setcookie("email", "sunnnnnyyyyy25@gmail.com", time() + 86400, "/"); // 86400 seconds = 1 day

echo "Cookies have been set.<br>";
echo "You can check the cookies in your browser's developer tools under the 'Application' tab.<br>";
echo "Or you can check the cookies using the <a href='getCookies.php'>getCookies.php</a> script.<br>";
?>