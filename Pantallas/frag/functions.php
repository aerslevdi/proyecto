<?php
require_once('functions2.php');
$asunto = ['Administración', 'Call Center', 'Comercio Exterior', 'Comunicación',
 'Construcción','Diseño','Educación','Finanzas','Gastronomía','Gerencia','Ingeniería',
 'Legales','Logística','Marketing','Medicina','Minería','Oficios','Producción',
 'Recursos Humanos','Secretaría','Seguros','Tecnología','Ventas'];
$user['nombreCompleto']='';
$user['nombreEmpresa']='';
$user['direccionEmail']='';
$user['cuit']='';
$user['razon']=' ';
$user['matricula']='';
$user['puesto']='';
$user['direccion']='';
$user['telefono']='';
$terminos='';
$user['estudios']='';
if ($_POST) {
  $user=crearUsu($_POST);
  $error=validar($user);


if(empty($error)){

  guardarUsuario($user);
var_dump($user);

  loguear($user);
}
          }
