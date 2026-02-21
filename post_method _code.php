<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST IN PHP</title>
</head>
<body>
    <form action="post_method _code.php" method="post">
        <label>Username:</label> <br>
        <input type="text" name="username" placeholder="Enter your name">
        <label>Password:</label> <br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
echo "{$_POST['username']} <br>";
echo "{$_POST['password']} <br>";
?>