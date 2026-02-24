<?php
$cookie_name = "last_visit";
$cookie_value = date("Y-m-d");
setcookie($cookie_name, $cookie_value, time() + 3600);

if (isset($_COOKIE[$cookie_name]))
    echo "Last visit: " . $_COOKIE[$cookie_name];
else
    echo "First visit";
?>