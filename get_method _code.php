<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET IN PHP</title>
</head>
<body>
    <form action="get_method _code.php" method="get">
        <label>Username:</label> <br>
        <input type="text" name="username" placeholder="Enter your name">
        <label>Password:</label> <br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
echo "{$_GET['username']} <br>";
echo "{$_GET['password']} <br>";
?>