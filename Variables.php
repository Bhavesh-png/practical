<?php
//Variable a reusable container that holds data string , integer,flaot ,boolean it is allcate space in memeory for values 
//variable name should start with $ sign and followed by letter or underscore
//variable name should not start with number and should not contain space

//declare variable
//1st code
$name = "Bhavesh";
$age = 19;
$height = 5.9;
$isStudent = true;
//output variable
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($isStudent ? "Yes" : "No") . "<br><br><hr>";//. use for concatenation
//2nd code
$person_name = "Bhavesh";
$food = "Pizza";
$email = "bhavesh@example.com";

$age = 19;
$user = 2;
$quality = 3;
$gpa = 2.5;
$prize = 4.99;
$tax_rate = 5.1;
$emoloyed = true;
$online = false;
$for_sale = true;

echo "Person Name:  " . $person_name . "<br>";
echo "Food:  " . $food . "<br>";
echo "Email:  " . $email . "<br>";
echo "Age:  " . $age . "<br>";
echo "User:  " . $user . "<br>";
echo "Quality:  " . $quality . "<br>";
echo "GPA:  " . $gpa . "<br>";
echo "Prize:  $" . $prize . "<br>";
echo "Tax Rate:  " . $tax_rate . "%<br>";
echo "Employed:  " . ($emoloyed ? "Yes" : "No") . "<br>";
echo "Online:  " . ($online ? "Yes" : "No") . "<br>";
echo "For Sale:  " . ($for_sale ? "Yes" : "No") . "<br>";

?>