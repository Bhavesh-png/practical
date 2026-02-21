<?php
$username = "bhavesh";
$phone = "1234567890";

$username_upper = strtoupper($username);
$username_lower = strtolower($username);
$username_ucfirst = ucfirst($username);
$username_ucwords = ucwords($username);
$length = strlen($username);
$position = strpos($username, "a");
$substring = substr($username, 0, 5);
$replaced = str_replace("a", "X", $username);
$trimmed = trim($username);
$exploded = explode(" ", $username);
$imploded = implode(" ", $exploded);
$strrev = strrev($username);
$str_shuffle = str_shuffle($username);
$word_count = str_word_count($username);
$strcmp = strcmp($username, "BHAVESH");
similar_text($username, "BHAVESH", $percent);

echo "Upper: $username_upper<br>";
echo "Lower: $username_lower<br>";
echo "Ucfirst: $username_ucfirst<br>";
echo "Ucwords: $username_ucwords<br>";
echo "Length: $length<br>";
echo "Position of a: $position<br>";
echo "Substring: $substring<br>";
echo "Replaced: $replaced<br>";
echo "Trimmed: $trimmed<br>";
echo "Imploded: $imploded<br>";
echo "Reverse: $strrev<br>";
echo "Shuffle: $str_shuffle<br>";
echo "Word count: $word_count<br>";
echo "Compare result: $strcmp<br>";
echo "Similarity %: $percent<br>";
?>