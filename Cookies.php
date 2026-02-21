<?php
//Information about the user's Web - Broswer targeted advertisement, browser preferences, and other non-sensitive data
//Cookies are stored on the client's computer and can be accessed by the server on subsequent requests. 
//They are commonly used for session management, personalization, and tracking user behavior.
//F12 -> Application -> Cookies
//setcookie(name, value, expire, path, domain, secure, httponly);
// Set cookies
setcookie("username", "Bhavesh Borse", time() + (86400 * 30), "/");
setcookie("user_id", "12345", time() + (86400 * 30), "/");
setcookie("preferences", "dark_mode=true|font_size=large", time() + (86400 * 30), "/");
setcookie("tracking_id", "abc123xyz", time() + (86400 * 30), "/");

/*
    foreach($_COOKIE as $key => $value){
    echo "$key : $value <br>";
    }
*/

// Display cookies
if(isset($_COOKIE['username'])){
    echo "Username: " . $_COOKIE['username'] . "<br>";
}else{
    echo "Username cookie not set (refresh page).<br>";
}
?>