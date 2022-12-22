<?php
include 'config.php';
session_start();

// Retrieve the message from the form submission
$message = $_POST['message'];
$username = $_POST['username'];

// Escape the message to prevent SQL injection attacks
$message = $conn->real_escape_string($message);
$username = $conn->real_escape_string($username);

// Insert the message into the database
$sql = "INSERT INTO posts VALUES (NULL,'$username','$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: prikbord.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

