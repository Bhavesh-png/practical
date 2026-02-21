<?php
echo "<h2>Website Registration Details</h2>";
echo "Username:" . $_POST["username"]."<br>";
echo "Email:" . $_POST["email"]."<br>";
echo "Gender:" . $_POST["gender"]."<br>";
echo "Skills:";
foreach ($_POST["skills"] as $s)
{
    echo $s . " ";
}
echo"<br>";
echo"Country:" . $_POST["country"];
?>