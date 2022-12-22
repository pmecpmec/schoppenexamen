<?php
include 'config.php';
session_start();

// Retrieve the message from the form submission
$message = $_POST['message'];
$username = $_POST['username'];
$name = $_FILES['file']['name'];
$target_dir = "videos/";
$target_file = $target_dir . $_FILES["file"]["name"];

// Escape the message to prevent SQL injection attacks
$message = $conn->real_escape_string($message);
$username = $conn->real_escape_string($username);

// Insert the message into the database
$sql = "INSERT INTO posts VALUES (NULL,'$username','$message','".$name."','".$target_file."')";

$query = "INSERT INTO posts(name,location) VALUES('".$name."','".$target_file."')";

if ($conn->query($sql) === TRUE) {
    header("Location: prikbord.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

