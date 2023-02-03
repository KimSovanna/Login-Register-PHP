<?php

$server = "register-mysql.mysql.database.azure.com";
$user = "registeradmin";
$pass = "password@123";
$database = "register";

$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "./DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'mydemoserver.mysql.database.azure.com', 'myadmin@mydemoserver', 'yourpassword', 'quickstartdb', 3306, NULL, MYSQLI_CLIENT_SSL);

$conn = mysqli_connect($server, $user, $pass, $database);

if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>
