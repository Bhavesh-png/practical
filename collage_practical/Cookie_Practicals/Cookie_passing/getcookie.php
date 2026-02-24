<?php
if(isset($_COOKIE["username"]) && isset($_COOKIE["usercity"]))
{
echo "Username: ".$_COOKIE["username"]."<br>";
echo "City: ".$_COOKIE["usercity"];
}
else
{
echo "Cookies are not set!";
}
?>