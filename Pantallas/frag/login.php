<?php
if (isset($_COOKIE['id'])) {
  header('location: index.php');
  exit;
}
require_once('functions2.php');



 ?>



<section class="form">
     <div class="fa">
       <form  method="post">
         <fieldset class="login">
           <legend>Iniciar sesion</legend>
           <p>
             <label>Email</label><br>
             <input type="text" name="usuario" required>
           </p>
           <p>
             <label>Contraseña</label><br>
             <input type="password" name="contraseña"required>
         </p>
         <p>
           <label>Recordarme</label>
           <input type="checkbox" name="recordar" id="recordar" value="recordar">
         </p>
         <a href="#">Olvidé mi contraseña</a>
         <div class="button-box-login">
           <button type="submit" name="button">Enviar</button>
           <button type="reset" name="button">Borrar</button>
         </div>
         <a href="register-index.html">¿No tenes cuenta? Registrate</a>
       </fieldset>
     </form>
     </div>
   </section>
