<section class="form">

<div class="registro">
  <form class="registro" action="/action_page.php" method="post">
    <fieldset>
      <div class="publicidad">

      </div>
      <legend>Registro</legend>
      <p class="register-p">
        <label>Nombre completo</label><br>
        <input type="text" name="nombre-completo"required>
      </p>
      <p class="register-p">
        <label>E-Mail</label><br>
        <input type="email" name="direccion-email" required>
      </p>
      <p class="register-p">
        <label>Area de trabajo</label><br>
        <select name="asunto">
          <option value="01">Administracion</option>
          <option value="02">Comercio exterior</option>
          <option value="03">Comunicación</option>
          <option value="04">Construcción</option>
          <option value="05">Diseño</option>
          <option value="06">Educación</option>
          <option value="07">Finanzas</option>
          <option value="08">Gastronomía</option>
          <option value="09">Gerencia</option>
          <option value="10">Ingeniería</option>
          <option value="11">Legales</option>
          <option value="12">Logística</option>
          <option value="13">Marketing</option>
          <option value="14">Medicina</option>
          <option value="15">Minería</option>
          <option value="16">Oficios</option>
          <option value="17">Producción</option>
          <option value="18">Recursos Humanos</option>
          <option value="19">Secretaría</option>
          <option value="20">Seguros</option>
          <option value="21">Tecnología</option>
          <option value="22">Ventas</option>
        </select>
      </p>
      <p class="register-p">
        <label>Matricula</label><br>
        <input type="text" name="matricula"required>
      </p>
      <p class="register-p">
        <label>Estudios</label><br>
        <input type="radio" name="estudios" id="univeritario" value="univeritario"><label for="univeritario">Universitario completo</label>
        <input type="radio" name="estudios" id="terciario" value="terciario"><label for="terciario">Terciario completo</label>
        <input type="radio" name="estudios" id="tecnico" value="tecnico"><label for="tecnico">Tecnicatura completa</label><br>
        <input type="text" name="estudios" value="institucion" required>
      </p>
      <p class="register-p">
        <label>Contraseña</label><br>
        <input type="password" name="contraseña" required>
      </p>
      <p class="register-p">
        <label>¿Desea recibir noticias?</label><br>
        <input type="radio" name="mailing" id="si" value="si"><label for="si">Si</label>
        <input type="radio" name="mailing" id="no" value="no"><label for="no">No</label>
      </p>
      <p class="register-p">
        <label>Subir CV</label>
        <input type="file" name="archivo">
      </p>
      <div class="button-box">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </div>


  </fieldset>

</form>
</div>
</section>
