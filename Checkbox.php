    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkbox Code</title>
    </head>
    <body>
        <h2>Select Your Favorite Foods</h2>
        
    <form action="" method="POST">
    <input type="checkbox" name="Pizza" value="Pizza"> Pizza <br>
    <input type="checkbox" name="Burger" value="Burger"> Burger <br>
    <input type="checkbox" name="Pasta" value="Pasta"> Pasta <br>
    <input type="checkbox" name="Sandwich" value="Sandwich"> Sandwich <br>
    <input type="checkbox" name="IceCream" value="Ice Cream"> Ice Cream <br><br>

    <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>

   <?php
if(isset($_POST['submit'])){
    if(isset($_POST['Pizza'])) echo "You like Pizza <br>";
    if(isset($_POST['Burger'])) echo "You like Burger <br>";
    if(isset($_POST['Pasta'])) echo "You like Pasta <br>";
    if(isset($_POST['Sandwich'])) echo "You like Sandwich <br>";
    if(isset($_POST['IceCream'])) echo "You like Ice Cream <br>";
}
?>