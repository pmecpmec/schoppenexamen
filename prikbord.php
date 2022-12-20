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