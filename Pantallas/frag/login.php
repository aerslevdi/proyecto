<?php
if (isset($_SESSION['id'])) {
  header('location: index.php');
  exit;
}
require_once('functions2.php');

$email = '';

	$errores = [];

	if ($_POST) {
		$email = trim($_POST['email']);
		$errores = validarLogin($_POST);
    if (empty($errores)) {
 			$usuario = existeEmail($email);


 			if (isset($_POST['recordar'])) {
 	        setcookie('isolid', $usuario['id'], time() + 3600 * 24 * 30);
 	      }
 			loguear($usuario);
 			exit;
 		}

  }

 ?>



<section class="form">
     <div class="fa">
       <form  method="post">
         <fieldset class="login">

           <div class="error">
             <?php if (!empty($errores)):
             foreach ($errores as $value):?>
               <p><?php
               echo '*'.$value ; ?></p>

         <?php endforeach;endif; ?>
           </div>


           <legend>Iniciar sesion</legend>
           <p>
             <label>Email</label><br>
             <input type="text" name="email" value="<?=$email?>"required>
           </p>
           <p>
             <label>Contraseña</label><br>
             <input type="password" name="pass"required>
         </p>
         <p>
           <label>Recordarme</label>
           <input type="checkbox" name="recordar" >
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
