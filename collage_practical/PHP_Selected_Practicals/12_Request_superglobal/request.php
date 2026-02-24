<html>

<body>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit">
    </form>

    <?php
    if (isset($_REQUEST['name'])) {
        echo "Name: " . $_REQUEST['name'] . "<br>";
        echo "Age: " . $_REQUEST['age'];
    }
    ?>
</body>

</html>