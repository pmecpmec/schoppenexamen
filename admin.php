<!doctype html>
<html>
<header>
<link rel="stylesheet" href="style.css">
<?php
include 'header.php'
?>
</header>
<body>
<div class="Admin">
  <form action="/form/submit" method="GET"> 
  <input type="text" name="text" class="search" placeholder="Search For">
</form>
</div>
<div class="Accounts">
  <button>Button</button>
  <button>Button</button>
</div>
<div class="Vacature">
  <button>Button</button>
  <button>Button</button>
</div>
<div class="CV">
  <button>Button</button>
  <button>Button</button>
</div>
<footer id="footer"><?php include'footer.php' ?></footer>
</body>