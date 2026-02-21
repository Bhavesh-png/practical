<!DOCTYPE html>
<html>
<body>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        echo "Username is required";
    }
    elseif(empty($password)){
        echo "Password is required";
    }
    else{
        echo "Login successful";
    }
}
?>

</body>
</html>