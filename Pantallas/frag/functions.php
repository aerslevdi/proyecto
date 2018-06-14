<?php

require_once('functions2.php');
require_once('autoload.php');


$dns='mysql:host=localhost;dbname=isoldb;charset=utf8mb4;port=3306';
$db_user='root';
$db_pass='root';

try {
  $db=new PDO($dns,$db_user,$db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
   echo $e->getMessage();
}

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
  $user=crearUsu($_POST);

  $error=$validador->validar($user,$sql);


if(empty($error)){

  $usu=new Persona($user);
  $sql->guarda($usu);
  $user['id']=$db->lastInsertId();

  loguear($user);


}
          }
