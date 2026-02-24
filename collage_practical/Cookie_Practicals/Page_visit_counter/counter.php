<?php
// Must be before HTML
if (isset($_COOKIE["visit_count"])) {
    $count = $_COOKIE["visit_count"] + 1;
} else {
    $count = 1;
}

// Set cookie (1 hour)
setcookie("visit_count", $count, time() + 3600);
?>

<html>

<body>
    <?php
    echo "You have visited this page " . $count . " times.";
    ?>
</body>

</html>