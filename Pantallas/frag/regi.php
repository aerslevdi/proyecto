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
        <label>Nombre de empresa</label><br>
        <input type="text" name="nombre-empresa"required>
      </p>
      <p class="register-p">
        <label>E-Mail</label><br>
        <input type="email" name="direccion-email" required>
      </p>
      <p class="register-p">
        <label>C.U.I.T.</label><br>
        <input type="text" name="cuit"required>
      </p>
      <p class="register-p">
        <label>Puesto</label><br>
        <input type="text" name="puesto"required>
      </p>
      <p class="register-p">
        <label>Area de trabajo</label><br>
        <select name="asunto">
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
        <input type="radio" name="mailing" id="si" value="si"><label for="si">Si</label>
        <input type="radio" name="mailing" id="no" value="no"><label for="no">No</label>
      </p>
      <div class="button-box">
        <button type="submit" name="button">Enviar</button>
        <button type="reset" name="button">Borrar</button>
      </div>

  </fieldset>

</form>
</div>
</section>
