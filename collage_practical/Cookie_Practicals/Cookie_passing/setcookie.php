<?php
// Must be before HTML output
$name = "Bhavesh";
$city = "Mumbai";

// Create cookies (1 hour)
setcookie("username", $name, time() + 3600);
setcookie("usercity", $city, time() + 3600);
?>

<html>

<body>
    <?php
    echo "Cookies are set.<br>";
    echo "<a href='getcookie.php'>Go to Next Page</a>";
    ?>
</body>

</html>