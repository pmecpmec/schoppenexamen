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
  <?php
    include 'header.php'
    ?>
</head>
<center>
    <h1>Uitzendbureau XXL<h1>
    <h1>Thuispagina</h1>
</center>

<a href="#-------">Inlog</a><br />                                             <!--links naar andere pagina's-->
  <a href="prikbord.php">Bestand</a><br />
  <a href="#-----">Account</a><br />
  <a href="Voorlichtingspagina.php">Voorlichtingspagina</a><br />                                                                   

</head>

<br>
</br>

<body>                                                                                <!--body-->
    <center>
    <p>Welkom</p>
    <p>multimedia internationaal uitzendbureau XXL.</p>
    </center>
 

  <br>
</br>

  <footer id="footer"><?php include'footer.php' ?>                                  <!--footer-->
  
  <center>
    <p>@ XXL 2022</p>  
</center>

  </footer>                           

</body>
<footer id="footer"><?php include'footer.php' ?></footer>
</html>
