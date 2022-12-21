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
<?php
include 'config.php';
session_start();
$namecurrent = $_SESSION["username"];
echo $namecurrent;
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

$conn->close();
?>
</div>

<!--Vacatures-->
<div class="Vacatures">
  
<!-- Vacature bedrijf-->
<hr>
<?php
echo '<p>Vacature Bedrijf</p>';
echo'<p>Vacature functie: </p>'.$pdf;
?>
</div>
<iframe src="<?php echo $path.$pdf; ?>" width="60%" height="350px">

<footer id="footer"><?php include'footer.php' ?></footer>
</body>
</html>