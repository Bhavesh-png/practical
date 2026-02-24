<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    try {
        if ($num2 == 0) {
            throw new Exception("Division by zero is not allowed.");
        }

        $result = $num1 / $num2;
        echo "Result: " . $result;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<html>

<body>

    <form method="post">
        Enter First Number:
        <input type="number" name="num1"><br><br>

        Enter Second Number:
        <input type="number" name="num2"><br><br>

        <input type="submit" name="submit" value="Divide">
    </form>

</body>

</html>