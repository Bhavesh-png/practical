<?php
if (isset($_POST['username']))
    setcookie("username", $_POST['username'], time() + 3600);

if (isset($_COOKIE['username']))
    echo "Welcome " . $_COOKIE['username'];
else {
?>
    <form method="post">
        <input type="text" name="username">
        <input type="submit">
    </form>
<?php
}
?>