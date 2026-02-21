<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radius in php</title>
</head>
<body>
    <form action="radius.php" method="post">
        <label>Enter the radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="Calculate Area">
    </form>
</body>
</html>
<?php
$radius = $_POST['radius'];
$circumference = null;
$volume = null;
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);//$circumference = round($circumference, 2) -> round() function is used to round the value of circumference to 2 decimal places
$area = pi() * pow($radius, 2);
$area = round($area, 2);
$volume = (4/3) * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference of circle with radius $radius is: $circumference <br>";
echo "Area of circle with radius $radius is: $area <br>";
echo "Volume of sphere with radius $radius is: $volume <br>";
?>