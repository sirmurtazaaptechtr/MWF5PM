<?php
// $name = "username";
// $value = "smuhussain";
// $expiry = time() + (86400 * 30);
// $path = "/";
// setcookie($name,$value,$expiry,$path);

// $name = "password";
// $value = "12345678";    
// setcookie($name,$value,$expiry,$path);


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "<p>Username = " .  $_COOKIE['username'] . "</p>";
echo "<p>Password = " .  $_COOKIE['password'] . "</p>";

session_start();
$_SESSION['username'] = $_COOKIE['username'];
$_SESSION['password'] = $_COOKIE['password'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// remove all session variables
session_unset();

// destroy the session
session_destroy();


echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>