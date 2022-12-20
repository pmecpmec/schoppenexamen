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
  <meta charset="utf-8">
  <title>Home Page</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
    <center>
    <p>Welcome</p>
    <center>
  <footer id="footer"><?php include'footer.php' ?></footer>
</body>

</html>