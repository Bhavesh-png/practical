<html>

<body>
    <form method="post">
        End: <input type="text" name="end">
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $end = $_POST['end'];
        $n1 = 0;
        $n2 = 1;

        while ($n1 <= $end) {
            echo $n1 . " ";
            $n3 = $n1 + $n2;
            $n1 = $n2;
            $n2 = $n3;
        }
    }
    ?>
</body>

</html>