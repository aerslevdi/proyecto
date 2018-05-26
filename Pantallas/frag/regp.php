<?php

if (isset($_SESSION['id'])) {
  header('location: index.php');
  exit;


}

 ?>


<section class="form">
  <div class="registro">
    <form class="registro" enctype="multipart/form-data"  method="post">
      <fieldset>

        <legend>Registro</legend>
            <div class="error">
              <?php if (!empty($error)):
              foreach ($error as $value):?>
                <p><?php
                echo '*'.$value ; ?></p>

          <?php endforeach;endif; ?>
            </div>
            <?php if (!isset($_GET['empresa'])):?><p class="register-p">
              <label>Nombre completo</label><br>
              <input type="text" name="nombreCompleto" value="<?=$user['nombreCompleto'] ?>" >
            </p>
            <?php else:  ?>
              <p class="register-p">
                <label>Nombre de empresa</label><br>
                <input type="text" name="nombreEmpresa" value="<?=$user['nombreEmpresa'] ?>">
              </p>
            <?php endif; ?>
      <p class="register-p">
        <label>E-Mail</label><br>
        <input type="email" name="direccionEmail" value="<?=$user['direccionEmail'] ?>">
      </p>
      <?php if (!isset($_GET['empresa'])):?>
        <p class="register-p">
          <label>C.U.I.T.</label><br>
          <input type="text" name="cuit" value="<?=$user['cuit'] ?>">
        </p>
        <?php else:  ?>
          <p class="register-p">
            <label>Razón social</label><br>
            <input type="text" name="razon" value="<?=$user['razon']?>">
          </p>
      <?php endif; ?>
      <p class="register-p">
     <label>Teléfono de contacto</label><br>
     <input type="tel"  name='telefono' id='phone' value="<?=$user['telefono'] ?>">
   </p>
   <p class="register-p">
     <label>Dirección de domicilio</label>
     <input type="text" name="direccion" id="direccion" value="<?=$user['direccion']?>">
   </p>
   <?php if (isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Puesto</label><br>
        <input type="text" name="puesto" value="<?=$user['puesto']?>">
      </p>
    <?php endif; ?>

      <?php if (!isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Matricula</label><br>
        <input type="text" name="matricula" value="<?=$user['matricula'] ?>" >
      </p>
      <p class="register-p">
        <label>Estudios</label><br>
        <input type="radio" name="estudios"  value="universitario"><label for="univeritario">Universitario completo</label>
        <input type="radio" name="estudios" value="terciario"><label for="terciario">Terciario completo</label>
        <input type="radio" name="estudios" value="tecnico"><label for="tecnico">Tecnicatura completa</label><br>
      </p>
    <?php endif; ?>
      <p class="register-p">
        <label>Contraseña</label><br>
        <input type="password" name="contrasenia" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos 8 caracteres ,un numero ,mayuscula,minuscula">
      </p>
      <p class="register-p">
        <label>Repetir contraseña</label><br>
        <input type="password" name="contrasenia2" value="" >
      </p>
      <?php if (!isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Foto perfil : </label>
        <input type="file" name="perfil">
      </p>
    <?php endif; ?>
      <p class="register-p">
        <input type="checkbox" name="mailing" id="mailing" value=""><label>¿Desea recibir noticias?</label>
      </p>
      <p class="register-p">
        <input type="checkbox" name="terminos" id="condiciones" value=""><label class="terminos">Acepto <a href="#">terminos y condiciones</a></label>
      </p>
      <div class="button-box">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </div>

  </fieldset>

</form>
</div>
</section>
