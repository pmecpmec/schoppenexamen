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
  <?php
include 'header.php'
?>
</head>

<body class="loggedin">
  <nav class="navtop">
    <div>
      <h1>Website Title</h1>
      <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
  </nav>
  <div class="homecontent">
    <h2>Home Page</h2>
    <p>Welcome back, <?= $_SESSION['name'] ?>!</p>
  </div>
  <footer id="footer"><?php include'footer.php' ?></footer>
</body>

</html>