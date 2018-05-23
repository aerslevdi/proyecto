<?php 

if (isset($_COOKIE['id'])) {
  header('location: index.php');
  exit;


}

 ?>
<div class="selection">
  <ul>
    <br>
    <br>
    <br>
    <li><a href="register.php?empresa" class="sbutton">Empresas</a></li>
    <br><br>
    <li><a href="register.php" class="sbuttonp">Profesional</a></li>
  </ul>
</div>
