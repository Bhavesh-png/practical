<?php
//Hashing = Transforming sensitive data (passoword) into letter,number and /or symbol via a mathematical process 
//(Similar to encryption) Hides The original data from 3rd parties 

// * PASSWORD_DEFAULT = Use the bycrypt algorithm (default as of PHP 5.5) .
// * Note that this constant is designed to change over time as new and stronger algorithms are added to PHP.
//For that reason , the length of the result from using this recommend to store the result in a database column 
//(255characters would be a good choice.)

//Password verify function :- 

//password_verify(String $password, string $hash): bool

// ==> Verifies that the given hash matches the given password. password_verify() is comatible with crypt(). 
//Therefore, Passord hashes ceated with crypt() Can be used with password_verify(). 
?>

<?php
$password = "ASUS1234";
$hash = password_hash($password, PASSWORD_DEFAULT);
if(password_verify("ASUS1234", $hash)){
    echo "You are logged in!";
}else{
    echo "Invalid password.";
}
//Click ,input, mouse, foucus
//Check Password using F12 -> Application -> Local Storage

//<?php
// ❌ You cannot check hashed password using F12
// F12 only shows client-side data (HTML, CSS, JS, network request)

// ✅ Password hashing happens on SERVER (PHP)
// So hashed value is never visible in browser DevTools

// 👉 In F12 → Network tab you can only see:
// username=admin&password=password123  (raw password sent to server)

// ✅ To check hash properly use these methods:

// Method 1: Print hash (testing only)
//$password = "password123";
//$hash = password_hash($password, PASSWORD_DEFAULT);
//echo $hash;   // shows hashed password

// Method 2: Check database
// Open phpMyAdmin → password column
// Hashed password looks like:
// $2y$10$sdhksdhkshdkshd...

// Method 3: Verify hash (correct login check)
//if(password_verify($password, $hash)){
//    echo "Password correct";
//}

// 🔥 Important concept
// Hashing is one-way → cannot convert back to original password
// Only verification possible using password_verify()

?>
