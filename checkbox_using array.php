<form action="" method="POST">
    <h2>Select Your Favorite Foods</h2>

    <input type="checkbox" name="food[]" value="Pizza"> Pizza <br>
    <input type="checkbox" name="food[]" value="Burger"> Burger <br>
    <input type="checkbox" name="food[]" value="Pasta"> Pasta <br>
    <input type="checkbox" name="food[]" value="Sandwich"> Sandwich <br>
    <input type="checkbox" name="food[]" value="Ice Cream"> Ice Cream <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    if(isset($_POST['food']))
    {
        echo "You like:<br>";

        foreach($_POST['food'] as $item)
        {
            echo $item . "<br>";
        }
    }
    else
    {
        echo "No food selected";
    }
}
?>