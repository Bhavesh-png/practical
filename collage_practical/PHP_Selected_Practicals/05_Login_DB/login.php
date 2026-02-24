<html>

<body>
    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "user");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT * FROM appuser1 WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $q);

    if (mysqli_num_rows($result) > 0)
        echo "Login Successful!";
    else
        echo "Invalid login";
}
?>