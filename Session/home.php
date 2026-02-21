<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<?php include "Header.html"; ?>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>

<?php include "Footer.html"; ?>

</body>
</html>