<?php
// Server = SGB (Super Global Variable)  it means it pre-define variable in php is knowns as SGB
//SGB that contains header,path,and script location information of current page
//The Entire in this array are created the web server.
//Show nearby everything you need to know about the current web page environment and the request being made to the server.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
</head>

<body>
    <h1>Server Information</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>htmlspecialchars() function is used to convert special characters to HTML entities,
        which helps prevent XSS (Cross-Site Scripting) attacks by ensuring that any HTML tags entered by
         the user are displayed as plain text rather than being executed as code.</p><br>
         <input type="text"name="username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    echo "Hello, " . $username . "!";
}
?>