<?php
require_once('functions2.php');
$user['name']='';
$user['direccionEmail']='';
$user['iden']='';
$user['direccion']='';
$user['telefono']='';
$user['entidad']='';
$terminos='';
$user['foto']='';
if ($_POST) {
  $user=crearUsu($_POST);
  $error=validar($user);


if(empty($error)){

  guardarUsuario($user);


  loguear($user);
}
          }
