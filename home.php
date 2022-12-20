<?php
session_start();
// Als de gebruiker niet ingelogd is gaat hij terug naar de start pagina. 
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
<center>
    <h1>Home</h1>
</center>
</head>

<body>
    <center>
    <p>Welcome</p>
    <center>
</body>

</html>