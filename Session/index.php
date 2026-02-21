<?php
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === "admin" && $password === "password"){
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    }else{
        $error = "Invalid login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php include "Header.html"; ?>

<h3>Login Page</h3>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Login">
</form>

<?php if(isset($error)) echo $error; ?>

<?php include "Footer.html"; ?>

</body>
</html>