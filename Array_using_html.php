    <!DOCTYPE html>
    <html>
    <body>
    <title>Associative Array Using HTML & PHP</title>
    
    <form method="post">
     <p>Choose country: India, USA, UK, France</p>
     Enter Country Name:
     <input type="text" name="country" required>
     <input type="submit" value="Submit">
   </form>

<?php
$capitals = [
    "India"  => "New Delhi",
    "USA"    => "Washington D.C.",
    "UK"     => "London",
    "France" => "Paris"
];
//$country = $_POST['country'];
//$capital = ["USA"];

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $country = $_POST['country'];

    if(isset($capitals[$country])){
        $capital = $capitals[$country];
        echo "The capital of $country is $capital";
    }else{
        echo "Country not found";
    }
}
?>

</body>
</html>