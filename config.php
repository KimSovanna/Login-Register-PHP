<?php

$server = "register-mysql.mysql.database.azure.com";
$user = "registeradmin";
$pass = "password@123";
$database = "register";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
