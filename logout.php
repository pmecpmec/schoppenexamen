<?php
// Initialize the session
session_start();
 
// log this interaction
$id = $_SESSION["id"];
$username = $_SESSION["username"];
require_once "config.php";
mysqli_query($link, "INSERT INTO simple_logs(`user_id`, `message`) VALUES($id, '$username logged out.')");

// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();


// Redirect to login page
header("location: login.php");
exit;
