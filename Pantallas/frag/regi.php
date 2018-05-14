
<?php
require_once('funciones2.php');

if ($_POST) {

   $name=trim($_POST['name']);
   echo $name ;
   $empresa=trim($_POST['nameuser']);
   $email=trim($_POST['email']);
   $cuit=trim($_POST['cuit']);
   $puesto=trim($_POST['puesto']);

   $errores=validar($_POST);


 }else {

   $name=' ';
   $empresa=' ';
   $email=' ';
   $cuit=' ';
   $puesto=' ';
 }





 ?>


<section class="form">

<div class="registro">
  <form class="registro" action="" method="post">
    <fieldset>

      <legend>Registro</legend>
      <p class="register-p">
        <label>Nombre completo</label><br>
        <input  <?php if (!empty($errores['name'])) {   ?>
          class="rojo"<?php   } ?>
           type="text" name="name"
            value="<?=$name ?>
             <?php if (empty($errores['name'])) {
          $errores['name'];}
          ?>
       " required>
      </p>
      <p class="register-p">
        <label>Nombre de empresa</label><br>
        <input <?php if (!empty($errores['empresa'])) {   ?>
          class="rojo"<?php   } ?> type="text" name="nameuser" value=" <?=$empresa ?> " required>
      </p>
      <p class="register-p">
        <label>E-Mail</label><br>
        <input  <?php if (!empty($errores['email'])) {   ?>
          class="rojo"<?php   } ?> type="email" name="email" value="<?=$email ?> "  required>
      </p>
      <p class="register-p">
        <label>C.U.I.T.</label><br>
        <input <?php if (!empty($errores['cuit'])) {   ?>
          class="rojo"<?php   } ?> type="text" name="cuit" value="<?=$cuit ?> " required>
      </p>
      <p class="register-p">
        <label>Puesto</label><br>
        <input  <?php if (!empty($errores['puesto'])) {   ?>
          class="rojo"<?php   } ?> type="text" name="puesto" value="<?=$puesto ?> " required>
      </p>
      <p class="register-p">
        <label>Area de trabajo</label><br>
        <select name="asunto" >
          <option value="01">Administracion</option>
          <option value="02">Call center</option>
          <option value="03">Comercio exterior</option>
          <option value="04">Comunicación</option>
          <option value="05">Construcción</option>
          <option value="06">Diseño</option>
          <option value="07">Educación</option>
          <option value="08">Finanzas</option>
          <option value="09">Gastronomía</option>
          <option value="10">Gerencia</option>
          <option value="11">Ingeniería</option>
          <option value="12">Legales</option>
          <option value="13">Logística</option>
          <option value="14">Marketing</option>
          <option value="15">Medicina</option>
          <option value="16">Minería</option>
          <option value="17">Oficios</option>
          <option value="18">Producción</option>
          <option value="19">Recursos Humanos</option>
          <option value="20">Secretaría</option>
          <option value="22">Seguros</option>
          <option value="23">Tecnología</option>
          <option value="24">Ventas</option>
        </select>
      </p>
      <p class="register-p">
        <label>Contraseña</label><br>
        <input type="password" name="contraseña"required>
      </p>
      <p class="register-p">
        <label>¿Desea recibir noticias?</label><br>
        <input type="radio" name="mailing"  ><label for="si">Si</label>
        <input type="radio" name="mailing"><label for="no">No</label>
      </p>
      <div class="button-box">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </div>

  </fieldset>

</form>
</div>
</section>
