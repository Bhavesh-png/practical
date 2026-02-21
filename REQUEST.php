<?php
// ==============================
// ✅ $_REQUEST Definition
// ==============================
// $_REQUEST is a Super Global Variable in PHP
// It is used to collect data sent from HTML form
// It contains data from:
// 1) $_GET
// 2) $_POST
// 3) $_COOKIE
// So $_REQUEST can access form data regardless of method

// ==============================
// ✅ Example HTML Form
// ==============================
?>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="text" name="age"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// ==============================
// ✅ $_REQUEST Example Code
// ==============================
if(isset($_REQUEST['submit'])){
    
    // Access form values using $_REQUEST
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];

    echo "Name: $name <br>";
    echo "Age: $age <br>";
}

// ==============================
// ✅ Explanation
// ==============================
// $_REQUEST collects input from GET, POST, COOKIE
// It does not depend on form method
// Example:
// If form method = GET → works
// If form method = POST → works
// If cookie exists → accessible

// ==============================
// 🔥 Important Note (Security)
// ==============================
// $_REQUEST is less secure
// Because it mixes GET, POST, COOKIE data
// In real projects → prefer $_POST or $_GET

// ==============================
// ⭐ Exam Points
// ==============================
// 1) $_REQUEST is a superglobal variable
// 2) Used to collect form data
// 3) Works with GET, POST, COOKIE
// 4) Simpler but less secure than $_POST
?>