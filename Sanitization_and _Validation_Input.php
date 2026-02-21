<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization and Validation Input Code</title>
</head>
<body>
    <form action="Sanitization_and _Validation_Input.php" method="post">
        Username:
        <input type="text" id="name" name="name"><br><br>
        
        Age:
        <input type="text" id="age" name="age"><br><br>
        
        Email:
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" name="submit" value="Login">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    // Sanitization
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    echo "Sanitized Name: $name <br>";
    echo "Sanitized Age: $age <br>";
    echo "Sanitized Email: $email <br>";

    // Validation
    if(!empty($name))
        echo "Valid Name: $name <br>";
    else
        echo "Name required <br>";

    if(filter_var($age, FILTER_VALIDATE_INT))
        echo "Valid Age: $age <br>";
    else
        echo "Invalid Age <br>";

    if(filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "Valid Email: $email <br>";
    else
        echo "Invalid Email <br>";
}
?>
        