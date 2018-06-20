<?php
session_start();
require_once('autoload.php');

if (isset($_SESSION['id'])) {

$sql=new mysql();
  $user=$sql->traerPorIdSql($_SESSION['id']);

}
 ?>

<header>
  <div  class="menu">
    <div class="paty">
      <label for="menucheck">
      <img src="../img/paty2.png" alt="">

    </label>
    <input type="checkbox" name="" id="menucheck" value="">
<ul class="desple">
  <?php
  if ( isset($_SESSION['id'])) :


  if (isset($user["nombre"])) :?>
    <li><a href="restaurar.php"><?=$user["nombre"]?></a></li>
  <?php elseif (isset($user["nombre"]))  : ?>
  <li> <a href="restaurar.php"><?=$user["nombre"]?></a></li>
  <?php endif; else: ?>
  <li>    <a href="register.php">Crear cuenta</a></li>
  <li>   <a href="login.php">Iniciar sesion</a></li>
  <?php endif;
if (isset($_SESSION['id'])){ ?>
<li> <a href="frag/logout.php">Logout </a></li>


</ul>
<?php } ?>





</ul>
       <a href="../index.php">Inicio</a>
    </div>
    <div class="lupa" >

      <?php

      if ( isset($_SESSION['id'])) :


      if (isset($user["nombre"])) :?>
        <p>Bienvenido <a href="restaurar.php"><?=$user["nombre"]?></a></p>
      <?php elseif (isset($user["nombreCompleto"]))  : ?>
        <p>Bienvenido <a href="restaurar.php"><?=$user["nombre"]?></a></p>
        <img class="fotin si" src="img/<?=$user['direccionEmail']?>.png" alt="">
            <img class="fotin si" src="img/<?=$user['direccionEmail']?>.jpg" alt="">
      <?php endif; else: ?>
       <a href="register.php">Crear cuenta</a>
        <a href="login.php">Iniciar sesion</a>
      <?php endif; ?>

        <input type="search" name="search" value=""><?php
   if ( isset($_SESSION['id'])){ ?>
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

<div class="med">
  <img src="../img/este.png" alt="">
</div>
