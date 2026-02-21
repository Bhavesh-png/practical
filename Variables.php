<?php
//Variable a reusable container that holds data string , integer,flaot ,boolean it is allcate space in memeory for values 
//variable name should start with $ sign and followed by letter or underscore
//variable name should not start with number and should not contain space

//declare variable
$name = "Bhavesh";
$age = 19;
$height = 5.9;
$isStudent = true;
//output variable
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br>"; //. use for concatenation
?>