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

<!-- knop om een bericht op de prikbord pagina te plaatsen -->
<button onclick="openForm()"> Bericht plaatsen</button>

<form id="myForm" action="submit_message.php" enctype='multipart/form-data' method="POST" style="display:none">
  <label for="username">Enter your username:</label><br>
  <textarea name="username" id="username" rows="1" cols="50"></textarea><br>
  <label for="message">Enter your message:</label><br>
  <textarea name="message" id="message" rows="4" cols="50"></textarea><br>
</form>

<script>
  function openForm(){
    document.getElementById("myForm").style.display = "block";
  }
</script>

<?php
include 'config.php';
session_start();
//schrijf de querry
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // spuug de data uit van de rows
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
  
<!-- Vacature bedrijf-->
<hr>
<?php
// Vacature tonen vanuit db
$select = "SELECT * FROM `Vacature`";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->filename;
  $path = $row->directory;
}
echo '<p>Vacature Bedrijf</p>';
echo'<p>Vacature functie: </p>'.$pdf;
?>
</div>
<iframe src="<?php echo $path.$pdf; ?>" width="60%" height="350px">

<footer id="footer"><?php include'footer.php' ?></footer>
</body>
</html>