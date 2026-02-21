<?php
//Array = a variable that can hold multiple values at once
//Array = a data structure that can hold multiple values of different data types
//Array in PHP = indexed array, associative array, multidimensional array
//Indexed array = an array that uses numeric indexes to access its values it also called as numeric array
//Associative array = an array that uses named keys to access its values
//Multidimensional array = an array that contains one or more arrays
//Indexed array (numeric array)

//// ================= INDEXED ARRAY =================
$fruits = array("Apple", "Banana", "Orange", "Grapes");
echo $fruits[0]; //Output: Apple
echo "<br>";
echo $fruits[1]; //Output: Banana
echo "<br>";
echo $fruits[2]; //Output: Orange   
echo "<br>";
echo $fruits[3]; //Output: Grapes
echo "<br><hr><br>";
?>

<?php
//Associative array
//Associative array = an array that uses named keys to access its values
//An array made of key => value pairs is called an associative array
//id => username => email => password
//item => price => quantity => total price

// ================= ASSOCIATIVE ARRAY =================
echo "Associative Array<br>";

$capitals = [
    "India"  => "New Delhi",
    "USA"    => "Washington D.C.",
    "UK"     => "London",
    "France" => "Paris"
];

echo $capitals["India"]."<br>";
echo $capitals["USA"]."<br>";
echo $capitals["UK"]."<br>";
echo $capitals["France"]."<br>";
echo "<hr>";

// ================= ARRAY FUNCTIONS =================
array_pop($capitals);     // remove last element
array_shift($capitals);   // remove first element

$keys   = array_keys($capitals);
$values = array_values($capitals);
$flip   = array_flip($capitals);
$reverse= array_reverse($capitals);

echo "Count: ".count($capitals)."<br>";
echo "<hr>";

// ================= FOREACH LOOP =================
foreach($capitals as $country => $capital){
    echo "The capital of $country is $capital<br>";
}
?>