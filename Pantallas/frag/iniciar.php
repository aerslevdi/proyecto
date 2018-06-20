<?php

require_once('autoload.php');


$sql= new mysql();


$user['name']='';
$user['direccionEmail']='';
$user['iden']='';
$user['direccion']='';
$user['telefono']='';
$user['entidad']='';
$terminos='';
$user['foto']='';

if ($_POST) {
$validador=new validador();
  $auth=new Auth();
  $user=$Auth->crearUsu($_POST);

  $error=$validador->validar($user,$sql);


if(empty($error)){

  $usu=new Persona($user);
  $sql->guarda($usu);
  $sql->guardarIMg($_FILES,$_POST);
  $user['id']=$db->lastInsertId();

  $auth->loguear($user);


}
          }
