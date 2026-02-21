<?php 
//Write some code once , reuse when you need it type () 
//after fucntion name to invoke ex.add(2,3) will return 5 
//and subtract(5,2) will return 3 multiply(4,5) will return 20
// and divide(10,2) will return 5 and modulus(10,3) will return 1 
//and divide(10,0) will return "Cannot divide by zero"
function happy_birthday(){
    echo "Happy Birthday, Dear You<br>";
    echo "Happy Birthday, Dear You<br>";
    echo "Happy Birthday, Dear You<br>";
}
happy_birthday(); //calling the function to execute the code inside it
?>




<?php
echo "<br><hr><br>";
function is_even($number) {
    return $number % 2 == 0;
}
echo is_even(4) ? "Even" : "Odd"; // Output: Even
echo "<br>";
?>



<?php
echo "<br><hr><br>";
function hypotenuse($a, $b) {
    $c = sqrt($a * $a + $b * $b);
    return $c;
}
echo "Hypotenuse: " . hypotenuse(3, 4); // Output: Hypotenuse: 5
echo "<br>";
?>