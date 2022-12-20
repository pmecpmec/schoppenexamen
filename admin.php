<!doctype html>
<html>
<header>
<link rel="stylesheet" href="style.css">
<?php
include 'header.php'
?>
</header>
<body>
<!-- Zoek bar -->
<div class="Admin">
  <form action="/form/submit" method="GET"> 
  <input type="text" name="text" class="search" placeholder="Search For">
</form>
</div>

 <div class="Admin-h1">
 <p>Accounts</p>
 </div>

<!-- Accounts, Vacatures, CV tabellen met de bijbehoorende knoppen-->
<div class="Accounts">
  <table>
    <tr>
      <th>Users</th>
    </tr>
    <tr>
      <td>Lorem Ipsum</td>
    </tr>
  </table>
  </div>

   <div class="Button-Accounts">
    <button>Button</button>
    <button>Button</button>
   </div>

<div class="Admin-h2">
<p>Vacatures</p>
</div>

<div class="Vacature">
  <table>
    <tr>
      <th>Vacatures</th>
      <th>Companies</th>
    </tr>
    <tr>
      <td>Lorem Ipsum</td>
      <td>Lorem Ipsum</td>
    </tr>
  </table>
  </div>

  <div class="Button-Vacature">
    <button>Button</button>
    <button>Button</button>
  </div>

<div class="Admin-h3">
<p>CV</p>
</div>

<div class="CV">
  <table>
    <tr>
      <th>CV</th>
      <th>Users</th>
    </tr>
    <tr>
      <td>Lorem Ipsum</td>
      <td>Lorem Ipsum</td>
    </tr> 
  </table>
  </div>

  <div class="Button-CV">
    <button>Button</button>
    <button>Button</button>
  </div>
<footer id="footer"><?php include'footer.php' ?></footer>
</body>