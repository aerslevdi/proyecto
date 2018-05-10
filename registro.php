<?php
session_start();

$asunto = ['Administración', 'Call Center', 'Comercio Exterior', 'Comunicación',
 'Construcción','Diseño','Educación','Finanzas','Gastronomía','Gerencia','Ingeniería',
 'Legales','Logística','Marketing','Medicina','Minería','Oficios','Producción',
 'Recursos Humanos','Secretaría','Seguros','Tecnología','Ventas'];

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Isol - Registro</title>
     <link rel="stylesheet" href="css/style.css" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
   </head>
   <body >
     <header class="main-header">
      <div class="capa">


       <div class="logo">
         <a href="index.html"><img src="img/logo-isol.png" alt="logo"></a>
       </div>

       <nav class="nav">
         <img src="img/hamb.png" alt="hmb">    <ul>
           <li><a href="login.html"><h4>Iniciar</h4></a></li>
           <li><a href="register-index.html"><h4>Registrarse</h4></a></li>

         </ul>
       </nav>


     <section class="busqueda">
       <div class="barra">
         <form class="search-form " action="" method="">
           <input type="text" name="" value="" placeholder="Buscar">

         </form>
       </div>
     </section>

   </div>

     </header>
     <div class="menu">
                 <ul>
                   <li><a href="index.html">Home</a></li>
                   <li><a href="">Contacto</a></li>
                   <li><a href="">Agenda</a></li>
                   <li><a href="">Empresas que nos eligen</a></li>

                 </ul>

                 </div>
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
             <label>Razón social</label><br>
             <input type="text" name="razon"required>
           </p>
           <p class="register-p">
             <label>Puesto</label><br>
             <input type="text" name="puesto"required>
           </p>
           <p class="register-p">
             <label for="area">Area de trabajo</label><br>
             <select class="option" name="asunto">
               <option value="">Seleccione</option>
               <?php foreach ($asunto as $value): ?> <?php if ($asunto2 == $value): ?>
                  <option selected value="<?=$value?>"><?=$value?></option>
                  <?php continue;
                endif;?>
                <option value="<?=$value?>"><?=$value?></option>
               <?php endforeach; ?>
             </select>
           </p>
           <p class="register-p">
             <label>Contraseña</label><br>
             <input type="password" name="contraseña"required>
           </p>
           <p class="register-p">
             <label>Repetir contraseña</label><br>
             <input type="password" name="contraseña2"required>
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

       <footer >
         <ul>
           <li><a href="preguntas.html">-Preguntas Frecuentes-</a></li>
           <li><a href="#">-Sobre nosotros-</a></li>
           <li><a href="#">-Contacto-</a></li>
         </ul>
         <ul class="fondo">
           <img src="img/face.svg" alt="face.png">
           <li><a href="#">Facebook</a></li>
           <img src="img/instagram.svg" alt="instagram.svg">
           <li><a href="#">Instagram</a></li>
           <li><a href="#"><!--Red Social--></a></li>
           <img src="img/twitter.svg" alt="twitter.svg">
           <li><a href="#">Twitter</a></li>

         </ul>
       </footer>


   </body>
 </html>
