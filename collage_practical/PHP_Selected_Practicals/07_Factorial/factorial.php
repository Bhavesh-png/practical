<html>

<body>
    <form method="post">
        Number: <input type="text" name="n">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        $fact = 1;
        for ($i = 1; $i <= $n; $i++)
            $fact *= $i;

        echo "Factorial is " . $fact;
    }
    ?>
</body>

</html>