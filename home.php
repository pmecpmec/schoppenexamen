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

<head>                                                                                <!--head-->
  <meta charset="utf-8">
  <title>Home</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

  <center>
    <h1>Uitzendbureau XXL<h1>
    <h1>Thuispagina</h1>
</center>

<ul>                                                                                  <!--links naar andere pagina's-->
  <li><a href="#Login">login</a></li>
  <li><a href="#Account">account</a></li>
  <li><a href="#Bestand">Bestand</a></li>
</ul>

</head>

<body>                                                                                <!--body-->
    <center>
    <p>Welkom</p>
    <p>multimedia internationaal uitzendbureau XXL</p>
    <center>
  <footer id="footer"><?php include'footer.php' ?></footer>                           <!--footer-->
</body>

</html>
