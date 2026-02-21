<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function() </title>
</head>
<body>
    <form action="math_functions.php" method="post">
        <label>X:</label>
        <input type="text" name="x">

        <label>Y:</label>
        <input type="text" name="y">

        <label>Z:</label>
        <input type="text" name="z">

        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
//Math function() -> built in functions in PHP that perform mathematical operations on numbers
//Math function() -> can be used to perform basic arithmetic operations like addition, subtraction, multiplication, division and more complex operations like power, square root, trigonometric functions etc
//Math function() -> example : abs(), ceil(), floor(), round(), pow(), sqrt(), sin(), cos(), tan() etc.
if($_SERVER["REQUEST_METHOD"]=="POST")//check if the form is submitted using POST method
{

$x = $_POST['x'] ?? 0;// ?? 0 : null coalescing operator to check if the value is set and not null if not set then assign 0
$y = $_POST['y'] ?? 0;
$z = $_POST['z'] ?? 0;

echo "abs(x): ".abs($x)."<br>";
echo "round(x): ".round($x)."<br>";
echo "floor(x): ".floor($x)."<br>";
echo "ceil(x): ".ceil($x)."<br>";
echo "pow(x,y): ".pow($x,$y)."<br>";
echo "sqrt(x): ".sqrt($x)."<br>";
echo "max(x,y,z): ".max($x,$y,$z)."<br>";
echo "min(x,y,z): ".min($x,$y,$z)."<br>";
echo "pi(): ".pi()."<br>";
echo "rand(1,100): ".rand(1,100)."<br>";

}
?>