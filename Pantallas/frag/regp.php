


<section class="form">
  <div class="registro">
    <form class="registro"  method="post">
      <fieldset>
        <div class="publicidad">
        </div>
        <legend>Registro</legend>
        <p class="register-p">
          <label>Nombre completo</label><br>
          <input type="text" name="nombreCompleto" value="<?php echo $nombreCompleto ?>" required>
        </p>
      <p class="register-p">
        <label>Nombre de empresa</label><br>
        <input type="text" name="nombreEmpresa" value="<?php echo $nombreEmpresa ?>" required>
      </p>
      <p class="register-p">
        <label>E-Mail</label><br>
        <input type="email" name="direccionEmail" value="<?php echo $direccionEmail ?>" required>
      </p>
      <p class="register-p">
        <label>C.U.I.T.</label><br>
        <input type="text" name="cuit" value="<?php echo $cuit ?>" required>
      </p>
      <p class="register-p">
        <label>Razón social</label><br>
        <input type="text" name="razon" value="<?php echo $razon ?>" required>
      </p>
      <div class='register-p'>
     <label for='number'>Teléfono de contacto</label>
     <input type="tel"  name='telefono' id='phone' value="<?php echo $telefono ?>" required>
   </div>

   <div class="form-control">
     <label for="direccion">Dirección de domicilio</label>
     <input type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>" required>
   </div>
      <p class="register-p">
        <label>Puesto</label><br>
        <input type="text" name="puesto" value="<?php echo $puesto ?>" required>
      </p>
      <p class="register-p">
        <label for="area">Area de trabajo</label><br>
        <select class="option" name="asunto" value='<?php echo $asunto ?>'>
          <option value="">Seleccione</option>
          <?php foreach ($asunto as $value): ?> <?php if ($asunto2 == $value): ?>
             <option selected value="<?=$value?>"><?=$value?></option>
             <?php continue;
           endif;?>
           <option value="<?=$value?>" required><?=$value?></option>
          <?php endforeach; ?>
        </select>
      </p>
      <p class="register-p">
        <label>Matricula</label><br>
        <input type="text" name="matricula" value="<?php echo $matricula ?>" required>
      </p>
      <p class="register-p">
        <label>Estudios</label><br>
        <input type="radio" name="univeritario"  value="universitario"><label for="univeritario">Universitario completo</label>
        <input type="radio" name="terciario" value="terciario"><label for="terciario">Terciario completo</label>
        <input type="radio" name="tecnico" value="tecnico"><label for="tecnico">Tecnicatura completa</label><br>
      </p>
      <p class="register-p">
        <label>Contraseña</label><br>
        <input type="password" name="contrasenia" value="<?php echo $telefono ?>" required>
      </p>
      <p class="register-p">
        <label>Repetir contraseña</label><br>
        <input type="password" name="contrasenia2" value="<?php echo $telefono ?>" required>
      </p>
      <p class="register-p">
        <label>Subir CV</label>
        <input type="file" name="archivo">
      </p>
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
