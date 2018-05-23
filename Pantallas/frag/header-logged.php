<?php
require_once('functions2.php');


setcookie("id",1, time()+3600);
if (isset($_COOKIE['id'])) {
  $_SESSION['id'] = $_COOKIE['id'];

  $user=traerPorId($_SESSION['id']);
var_dump($_COOKIE['id']);
}
 ?>

<header>
  <div  class="menu">
    <div class="paty">
      <img src="../img/paty2.png" alt="">
       <a href="index.php">Inicio</a>
    </div>
    <div class="lupa" >
      <?php if (isset($user["nombreEmpresa"])) :?>
        <p>Bienvenido <a href="perfil.php"><?=$user["nombreEmpresa"]?></a></p>
      <?php elseif (isset($user["nombreCompleto"])) {
        <p>Bienvenido <a href="perfil.php"><?=$user["nombreCompleto"]?></a></p>
      }:  ?> <?php else: ?>
       <a href="register-index.php">Crear cuenta</a>
        <a href="login.php">Iniciar sesion</a>
        <?php endif; ?>
        <input type="search" name="search" value=""><?php
   if (isset($user)){ ?>
  <p><a href="frag/logout.php">Logout</a></p>

 <?php } ?>

      <img src="../img/search1.png" alt="">
    </div>
  </div>
  <div class="nav">
    <div class="opcion">
      <img src="../img/home.png" alt="">
      <a href="index.php">Inicio</a>
    </div>
    <div class="opcion">
      <img src="../img/service.png" alt="">
          <a href="">Servicios</a>
    </div>
    <div class="opcion seva" >
      <img src="../img/chango.png" alt="">
          <a href="">Carrito</a>
    </div>
    <div class="opcion desktop">

          <a href="">Contacto</a>
    </div>
    <div class="opcion desktop">

          <a href="">Empresas que nos eligen</a>
    </div>

  </div>

</header>
