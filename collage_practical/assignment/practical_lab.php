<?php
/* =========================================
   PRACTICAL–1
   Aim: Display a welcome message
========================================= */
echo "<h3>PRACTICAL–1</h3>";
echo "Welcome to PHP Programming<br><br>";

/* =========================================
   PRACTICAL–2
   Aim: Demonstrate variables
========================================= */
echo "<h3>PRACTICAL–2</h3>";
$name = "Amit";
$age = 20;
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br><br>";

/* =========================================
   PRACTICAL–3
   Aim: Arithmetic operations
========================================= */
echo "<h3>PRACTICAL–3</h3>";
$a = 10;
$b = 5;

echo "Addition = " . ($a + $b) . "<br>";
echo "Subtraction = " . ($a - $b) . "<br>";
echo "Multiplication = " . ($a * $b) . "<br>";
echo "Division = " . ($a / $b) . "<br><br>";

/* =========================================
   PRACTICAL–4
   Aim: if–else statement
========================================= */
echo "<h3>PRACTICAL–4</h3>";
$marks = 65;
if ($marks >= 40)
    echo "Result: Pass<br><br>";
else
    echo "Result: Fail<br><br>";

/* =========================================
   PRACTICAL–5
   Aim: switch case
========================================= */
echo "<h3>PRACTICAL–5</h3>";
$day = 3;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid Day";
}
echo "<br><br>";

/* =========================================
   PRACTICAL–6
   Aim: for loop
========================================= */
echo "<h3>PRACTICAL–6</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
echo "<br>";
?>

<!-- =========================================
     PRACTICAL–7
     Aim: HTML form + PHP input display
========================================= -->
<h3>PRACTICAL–7</h3>

<form method="post">
    Enter Name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo "Hello " . $_POST['name'];
}
?>