<!DOCTYPE html>
<html>
<body>

<h2>Credit Card Selection</h2>

<form method="post">

    <input type="radio" name="card" value="VISA"> VISA <br>
    <input type="radio" name="card" value="MasterCard"> MasterCard <br>
    <input type="radio" name="card" value="American Express"> American Express <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){

    if(isset($_POST['card'])){
        $card = $_POST['card'];

        switch($card){
            case "VISA":
                echo "You selected VISA card";
                break;

            case "MasterCard":
                echo "You selected MasterCard";
                break;

            case "American Express":
                echo "You selected American Express card";
                break;

            default:
                echo "Invalid selection";
        }

    }else{
        echo "Please select a card";
    }
}
?>

</body>
</html>