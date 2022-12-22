<?php
session_start();
$DATABASE_HOST = '0.0.0.0';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Probeert een connectie te maken met de database.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  // Als er een fout is krijg je een fout melding
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
} // Kijkt nu of de informatie klopt wat is ingevuld.
if (!isset($_POST['username'], $_POST['password'])) {
  // Heeft de informatie niet binnengekregen.
  exit('Vul alstublieft uw gebruikersnaam en wachtwoord in!');
}
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
  $stmt->bind_param('s', $_POST['username']);
  $stmt->execute();
  // Bewaar de informatie in de database als het account bestaat.
  $stmt->store_result();
}
$stmt->store_result();
if ($stmt->num_rows > 0) {
  $stmt->bind_result($id, $password);
  $stmt->fetch();
  // Account bestaat en nu wordt het wachtwoord gecontroleerd.
  //
  if (password_verify($_POST['password'], $password)) {
    // Het is gelukt u heeft ingelogd.
    // Crëer een sessie en stuur de gebruiker door naar de welkom pagina.
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['id'] = $id;
    header('Location: home.php');
  } else {
    // Verkeerde Wacthwoord
    echo 'Onjuiste gebruikersnaam en/of wachtwoord!';
  }
} else {
  // Vekeerde Gebruikersnaam
  echo 'Onjuiste gebruikersnaam en/of wachtwoord!';
}