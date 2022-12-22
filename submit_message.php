<?php
include 'config.php';

// Retrieve the message from the form submission
$message = $_POST['message'];
$username = $_POST['username'];
$_SESSION['username'] = $username2;

// Escape the message to prevent SQL injection attacks
$message = $conn->real_escape_string($message);
$username = $conn->real_escape_string($username);

// Insert the message into the database
$sql = "INSERT INTO posts VALUES (NULL,'$username2','$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: prikbord.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

