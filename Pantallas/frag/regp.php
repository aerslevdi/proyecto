


<section class="form">
  <div class="registro">
    <form class="registro"  method="post">
      <fieldset>

        <legend>Registro</legend>
            <div class="error">
              <?php if(isset($error)):
              foreach ($error as $value):?>
                <p><?php
                echo '*'.$value ; ?></p>

          <?php endforeach;endif; ?>
            </div>
            <?php if (!isset($_GET['empresa'])):?><p class="register-p">
              <label>Nombre completo</label><br>
              <input type="text" name="nombreCompleto" value="<?php echo $user['nombreCompleto'] ?>" >
            </p>
            <?php else:  ?>
              <p class="register-p">
                <label>Nombre de empresa</label><br>
                <input type="text" name="nombreEmpresa" value="<?php echo $user['nombreEmpresa'] ?>">
              </p>
            <?php endif; ?>
      <p class="register-p">
        <label>E-Mail</label><br>
        <input type="email" name="direccionEmail" value="<?php echo   $user['direccionEmail'] ?>">
      </p>
      <?php if (!isset($_GET['empresa'])):?>
        <p class="register-p">
          <label>C.U.I.T.</label><br>
          <input type="text" name="cuit" value="<?php echo   $user['cuit'] ?>">
        </p>
        <?php else:  ?>
          <p class="register-p">
            <label>Razón social</label><br>
            <input type="text" name="razon" value="<?php echo $user['razon']?>">
          </p>
      <?php endif; ?>
      <p class="register-p">
     <label>Teléfono de contacto</label><br>
     <input type="tel"  name='telefono' id='phone' value="<?php echo   $user['telefono'] ?>">
   </p>
   <p class="register-p">
     <label>Dirección de domicilio</label>
     <input type="text" name="direccion" id="direccion" value="<?php echo   $user['direccion']?>">
   </p>
   <?php if (isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Puesto</label><br>
        <input type="text" name="puesto" value="<?php echo   $user['puesto']?>">
      </p>
    <?php endif; ?>
      <p class="register-p">
        <label for="area">Area de trabajo</label><br>
        <select class="option" name="asunto" value='<?php echo $asunto ?>'>
          <option value="">Seleccione</option>
          <?php foreach ($asunto as $value): ?> <?php if ($asunto2 == $value): ?>
             <option selected value="<?=$value?>"><?=$value?></option>
             <?php continue;
           endif;?>
           <option value="<?=$value?>" ><?=$value?></option>
          <?php endforeach; ?>
        </select>
      </p>
      <?php if (!isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Matricula</label><br>
        <input type="text" name="matricula" value="<?php echo $user['matricula'] ?>" >
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
        <input type="password" name="contrasenia" value="">
      </p>
      <p class="register-p">
        <label>Repetir contraseña</label><br>
        <input type="password" name="contrasenia2" value="" >
      </p>
      <?php if (!isset($_GET['empresa'])):?>
      <p class="register-p">
        <label>Subir CV</label>
        <input type="file" name="archivo">
      </p>
    <?php endif; ?>
      <p class="register-p">
        <input type="checkbox" name="mailing" id="mailing" value="<?php echo $telefono ?>"><label>¿Desea recibir noticias?</label>
      </p>
      <p class="register-p">
        <input type="checkbox" name="terminos" id="condiciones" value="<?php echo $telefono ?>"><label>Acepto <a href="#">terminos y condiciones</a></label>
      </p>
      <div class="button-box">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </div>

  </fieldset>

</form>
</div>
</section>
