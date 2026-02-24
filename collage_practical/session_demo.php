<?php
session_start();

/* =========================================
   PAGE SWITCH LOGIC
========================================= */
$page = $_GET['page'] ?? "home";

/* =========================================
   Script 1: Simple Session Example
========================================= */
if ($page == "create") {
    $_SESSION["username"] = "Bhavesh";
    echo "<h2>Session Created!</h2>";
    echo '<a href="session_demo.php?page=show">Go to Next Page</a>';
}

/* Show session username */ elseif ($page == "show") {
    echo "Welcome " . ($_SESSION["username"] ?? "Guest");
}

/* =========================================
   Script 2: Form Session Example
========================================= */ elseif ($page == "store" && $_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];

    echo "<h2>Stored Successfully</h2>";
    echo '<a href="session_demo.php?page=display">Show Data</a>';
}

/* Display stored session data */ elseif ($page == "display") {
    echo "Name: " . ($_SESSION["name"] ?? "") . "<br>";
    echo "Email: " . ($_SESSION["email"] ?? "");
}

/* =========================================
   HOME PAGE
========================================= */ else {
?>
    <h2>Session Demo</h2>

    <h3>Script 1</h3>
    <a href="session_demo.php?page=create">Create Session</a>

    <hr>

    <h3>Script 2</h3>
    <form method="post" action="session_demo.php?page=store">
        Enter Name: <input type="text" name="name"><br><br>
        Enter Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

<?php
}
?>