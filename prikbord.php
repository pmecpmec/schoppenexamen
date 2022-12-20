<!doctype html>
<html>
<header>
   <link rel="stylesheet" href="style.css">
   <?php
    include 'header.php'
    ?>
</header>
<body>
<include src="./header.html"></include>
<div class="Prikbord">
  <form action="/form/submit" method="GET"> 
  <input type="text" name="text" class="search" placeholder="Search For">
</form>
</div>
<footer id="footer"><?php include'footer.php' ?></footer>
</body>
</html>