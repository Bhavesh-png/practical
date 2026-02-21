<?php
//Logical operators = used to combine conditional statements
//Logical operators = and (&&), or (||), not (!)
//Logical operators are used to combine multiple conditions in an if statement
//Logical operators return true or false based on the conditions being evaluated
//if (condition1 && condition2) {
//    //code to be executed if both condition1 and condition2 are true
//} elseif (condition1 || condition2) {
//    //code to be executed if either condition1 or condition2 is true
//} else {
//    //code to be executed if both condition1 and condition2 are false
//}
//temrature program using logical operators
$temperature = 25;
if( $temperature > 0 || $temperature < 30) {
    echo "The weather is good.";
} else {
    echo "The weather is not good.";
}
?>

<?php
//Code 2
echo "<br><hr><br>";
$temp = 15;
$cloudy = false;
if( $temp < 0 || $temp >30)
    {
    echo "The weather is not good.";
    }
else{
    echo "The weather is good.";
}
echo "<br><hr><br>";
if($cloudy == true){
    echo "It is cloudy.";
}
else{
    echo "It is not cloudy.";
}
?>