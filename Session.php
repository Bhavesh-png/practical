<?php
//Session = SGB (Super Global Variable) that can be used to store information to be used across multiple pages.
//A User is assigned a session ID when they visit a website, and this ID is stored in a cookie on the user's computer.
//Session data is stored on the server, and the session ID is used to retrieve this data when the user makes subsequent requests.
//Sessions are commonly used for user authentication, shopping carts, and other scenarios where you need to maintain state across multiple pages.
//example: login system, shopping cart, user preferences, etc.

//index.php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session code</title>
</head>
<body>
    <form action="Cookies.php" method="post">
        Username:
        <input type="text" id="username" name="username"><br><br>
        Password:
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // In a real application, you would verify the username and password against a database
        if($username === "admin" && $password === "password"){
            $_SESSION['username'] = $username; // Store username in session
            echo "Login successful! Welcome, " . $_SESSION['username'];
        }else{
            echo "Invalid username or password.";
        }
}
}
?>