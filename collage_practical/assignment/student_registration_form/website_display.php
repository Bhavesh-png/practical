<?php
echo "<h2>Website Registration Details</h2>";

echo "Username: " . ($_POST['username'] ?? "Not entered") . "<br>";
echo "Email: " . ($_POST['email'] ?? "Not entered") . "<br>";
echo "Gender: " . ($_POST['gender'] ?? "Not selected") . "<br>";

echo "Skills: ";
if (isset($_POST['skills'])) {
    foreach ($_POST['skills'] as $s) {
        echo $s . " ";
    }
} else {
    echo "No skills selected";
}

echo "<br>";

echo "Country: " . ($_POST['country'] ?? "Not selected");
