<?php
$originalString = "Hello World";

echo strlen($originalString) . "<br>";
echo strpos($originalString, "World") . "<br>";
echo substr($originalString, 6) . "<br>";
echo str_replace("Hello", "Hii", $originalString) . "<br>";
echo strtoupper($originalString) . "<br>";
echo strtolower($originalString) . "<br>";
echo strrev($originalString);
?>