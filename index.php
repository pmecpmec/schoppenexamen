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

<header>                                                                                <!--header-->

  <meta charset="utf-8">
  <title>Home</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <?php
    include 'header.php'
    ?>
    
<center>
    <h1>Uitzendbureau XXL<h1>
    <h1>Thuispagina</h1>
</center>

  <a href="prikbord.php">Bestand</a><br />                                            <!--links naar andere pagina's-->
  <a href="profile.php">Account</a><br />
  <a href="Voorlichtingspagina.php">Voorlichtingspagina</a><br />                                                                   

</header>

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
    <p>@ XXL 2022 1-800-243-0000</p>  
</center>

  </footer>                           

<footer id="footer"><?php include'footer.php' ?></footer>
</body>
</html>
