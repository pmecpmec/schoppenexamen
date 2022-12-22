<!doctype html>
<html>
<header>
   <link rel="stylesheet" href="style.css">
   <?php
    include 'header.php'
    ?>
</header>
<body>
<div class="Prikbord">
  <form action="/form/submit" method="GET"> 
  <input type="text" name="text" class="search" placeholder="Search For">
</form>

<!-- button to place a message and show the message on prikbord -->
<button onclick="openForm()"> Bericht plaatsen</button>

<form id="myForm" action="submit_message.php" enctype='multipart/form-data' method="POST" style="display:none">
  <label for="username">Enter your username:</label><br>
  <textarea name="username" id="username" rows="1" cols="50"></textarea><br>
  <label for="message">Enter your message:</label><br>
  <textarea name="message" id="message" rows="4" cols="50"></textarea><br>
  <input type="submit" value="Submit">
</form>

<script>
  function openForm(){
    document.getElementById("myForm").style.display = "block";
  }
</script>

<?php
include 'config.php';
session_start();
//Write the query
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>".$row['username']."</p>";
        echo "<p>".$row['message']."</p>";
    }
} else {
    echo "0 results";
}
?>

</div>

<!--Vacatures-->
<div class="Vacatures">
<hr>
<div class="Tabel-Vacatures">
<table>
  <tr>
    <th>Vacature</th>
    <th>Bedrijf</th>
    <th>Categorie</th>
    <th>Datum</th>
    <th>Opleiding</th>
    <th>Duur</th>
    <th>Jaarsalaris</th>
  </tr>
</table>
</div>
<?php
//Vacatures tonen vanuit DB
$sql = "SELECT vacature, Bedrijf, Category, Datum plaatsing, Opleiding, duur, Jaarsalaris from vacature";
$result = $conn-> query($sql);
if ($result-> num_rows > 0) {
  while ($row = $result-> fetch_assoc()){
    echo "<tr><td>" . $row["vacature"] . "</td><td>" . $row["Bedrijf"] . "</td><td>" . $row["Category"] . "</td><td>" . $row["Datum plaatsing"] . "</td><td>" . $row["Opleiding"] . "</td><td>" . $row["duur"] . "</td><td>" . $row["Jaarsalaris"] . "</td></tr>";
  }
  echo "</table>";
}
else {
echo "0 results";
}
?>
</div>
<footer id="footer"><?php include'footer.php' ?></footer>
</body>
</html>