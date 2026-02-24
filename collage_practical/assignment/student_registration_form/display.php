<?php
echo "<h2>Student Details</h2>";

// Name
echo "Name: " . ($_POST['name'] ?? "Not entered") . "<br>";

// Gender
echo "Gender: " . ($_POST['gender'] ?? "Not selected") . "<br>";

// Hobbies
echo "Hobbies: ";
if (isset($_POST['hobby'])) {
    foreach ($_POST['hobby'] as $h) {
        echo $h . " ";
    }
} else {
    echo "No hobbies selected";
}

echo "<br>";

// Course
echo "Course: " . ($_POST['course'] ?? "Not selected");
