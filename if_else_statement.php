<?php
//Definition of if-else statement in PHP
//if-else statement is a control structure that allows you to execute different blocks of code based on a condition
//if-else statement = if (condition) {
//    //code to be executed if condition is true 
//} else {
//    //code to be executed if condition is false
//}

//if-else statement
//Code 1
echo "Code 1 <br>";
$age = 18;
if ($age >= 18) {
    echo "You may enter the website.";
} 
elseif ($age >= 13 && $age < 18) {
    echo "You are a teenager.";
}
else {
    echo "You must be 18+ to enter the website. <br>";
}
?>

<?php
//Code 2
//if-else statement using boolean = true or false
echo "<br><hr><br>";
echo "Code 2 <br>";
$adult = true;
if ($adult == true) {
    echo "You may enter the website.";
} else {
    echo "You must be 18+ to enter the website.";
}
