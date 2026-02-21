<?php
//$_GET,$_POST  -> Special variables in PHP that are used to collect data from HTML forms data is sent
// to the file in the action attribute of <form> tag 
//form action = "some-file.php" method = "get" or "post"

//$_GET -> data is sent through URL and can be accessed using $_GET superglobal array
//$_GET -> data is visible in URL and has a limit of 2048 characters
//$_GET -> used for non-sensitive data and when you want to bookmark or share the URL
//$_GET -> example : http://localhost/php%20code's/get%26post.php?name=Bhavesh&age=19
//$_GET ->better for search page's

//$_POST -> data is sent through HTTP request body and can be accessed using $_POST superglobal array
//$_POST -> data is not visible in URL and has no size limit
//$_POST -> used for sensitive data and when you don't want to bookmark or share the URL
//$_POST -> example : when you submit a form with method="post" the data is sent to the server and can be accessed using $_POST array
//$_POST -> better for login page's or subbmittung creadentials
//$_POST -> more secure than $_GET because data is not visible in URL and has no size limit
?>