<?php
require_once('functions2.php');
require_once('objets/save.php');
require_once('objets/user.php');
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
  $usu=new Persona($user);
  $db= new Json();
  $db->guarda($user);
  loguear($user);

}
          }
