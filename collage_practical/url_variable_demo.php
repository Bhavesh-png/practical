<?php
/* =========================================
   Passing variables through URL using GET
   Combined file for both examples
========================================= */
?>

<!DOCTYPE html>
<html>

<body>

    <h2>Example 1: Enter Your Name</h2>

    <form method="get">
        Name: <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['username'])) {
        $name = $_GET['username'];
        echo "<b>Welcome, " . $name . "</b><br><br>";
    }
    ?>

    <hr>

    <h2>Example 2: Add Two Numbers</h2>

    <form method="get">
        Number 1: <input type="text" name="num1"><br><br>
        Number 2: <input type="text" name="num2"><br><br>
        <input type="submit" value="Add">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $a = $_GET['num1'];
        $b = $_GET['num2'];
        $sum = $a + $b;

        echo "First Number: " . $a . "<br>";
        echo "Second Number: " . $b . "<br>";
        echo "<b>Sum = " . $sum . "</b>";
    }
    ?>

</body>

</html>