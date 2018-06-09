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
          <p class="register-p">
              <label>Nombre Completo o Nombre Empresa*</label><br>
              <input type="text" name="name" value="<?=$user['name'] ?>" >
            </p>
      <p class="register-p">
        <label>E-Mail*</label><br>
        <input type="email" name="direccionEmail" value="<?=$user['direccionEmail'] ?>">
      </p>

        <p class="register-p">
          <label>DNI o Razon Social*</label><br>
          <input type="text" name="iden" value="<?=$user['iden'] ?>">
        </p>

      <p class="register-p">
     <label>Teléfono de contacto*</label><br>
     <input type="tel"  name='telefono' value="<?=$user['telefono'] ?>">
   </p>
   <p class="register-p">
     <label>Dirección de domicilio*</label>
     <input type="text" name="direccion" id="direccion" value="<?=$user['direccion']?>">
   </p>

   <p class="register-p">
     <label>Entidad*</label>
     <select class="" name="entidad">
       <option value="0">Empresa</option>
       <option value="1">Persona</option>


     </select>
   </p>



      <p class="register-p">
        <label>Contraseña*</label><br>
        <input type="password" name="contrasenia" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos 8 caracteres ,un numero ,mayuscula,minuscula">
      </p>
      <p class="register-p">
        <label>Repetir contraseña*</label><br>
        <input type="password" name="contrasenia2" value="" >
      </p>
      <?php if (!isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Foto perfil o Logo: </label>
        <input type="file" name="foto">
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
