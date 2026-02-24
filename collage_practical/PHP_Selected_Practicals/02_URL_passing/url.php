<html>

<body>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="number" name="age"><br><br>
        <input type="submit">
    </form>

    <?php
    $name = $_POST['name'] ?? "";
    $age  = $_POST['age'] ?? "";
    ?>

    <a href="page2.php?name=<?php echo $name ?>&age=<?php echo $age ?>">
        Check variable by url
    </a>
</body>

</html>