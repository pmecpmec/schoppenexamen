<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '0.0.0.0');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mysql1234');
define('DB_NAME', 'schoppenexamen');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("Oepsie floepsie " . mysqli_connect_error());
}