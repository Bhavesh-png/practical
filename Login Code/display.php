<?php
echo "<h2>Student Details</h2>";
echo "Name:" . $_POST["name"]."<br>";
echo "Gender:" . $_POST["gender"]."<br>";
echo "Hobbies:";
foreach ($_POST["hobbies"] as $h)
{
    echo $h . " ";
}
echo"<br>";
echo"Course:" . $_POST["course"];
?>
