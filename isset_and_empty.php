<?php
// isset() = checks whether a variable is declared and not NULL
// empty() = checks whether a variable has no value ( "", 0, NULL, false, empty array )
$name = "Bhavesh";

// check isset
if(isset($name)){
    echo "Variable exists<br>";
}

// change value to empty
$name = "";

// check empty
if(empty($name)){
    echo "Variable is empty";
}
?>