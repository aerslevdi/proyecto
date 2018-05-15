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
  $user['nombreCompleto']=trim($_POST['nombreCompleto']);
  $user['nombreEmpresa']=trim($_POST['nombreEmpresa']);
  $user['direccionEmail']=trim($_POST['direccionEmail']);
  $user['cuit']=trim($_POST['cuit']);
  $user['puesto']=trim($_POST['puesto']);
  $user['razon']=trim($_POST['razon']);
  $user['direccion']=trim($_POST['direccion']);
  $user['telefono']=trim($_POST['telefono']);
  $user['matricula']=trim($_POST['matricula']);
  $user['pass1']=trim($_POST['contrasenia']);
  $user['pass2']=trim($_POST['contrasenia2']);
  if(isset($_POST['universitario'])){
  $user['estudios']=trim($_POST['estudios']);
}
  if(isset($_POST['terminos'])){
      $terminos=$_POST['terminos'];
        }

  if(isset($_POST['universitario'])){
      $dato=$user['universitario']=$_POST['univeritario'];

            }

  if(isset($_POST['terciario'])){
      $dato=$user['terciario']=$_POST['terciario'];
            }

  if(isset($_POST['tecnico'])){
        $dato=$user['$tecnico']=$_POST['tecnico'];
            }


            if ($user['nombreCompleto']=='') {
              $error['name']='Ingrese un nombre';
            }

            if($user['nombreEmpresa'] ==''){
              $error['empresa']='Ingrese una empresa';
            }

            if ($user['direccionEmail']== '' ||  ! filter_var($user['direccionEmail'], FILTER_VALIDATE_EMAIL)) {
              $error['email']='Ingrese un mail valido';
            } 
            if($user['cuit']== ''){
              $error['cuit']='Ingrese un cuit';
            }
            if($user['puesto']== ''){
              $error['puesto']='Ingrese un puesto';
            }
            if($user['direccion']== ''){
              $error['direccion']='Ingrese un direccion';
            }
            if($user['telefono']== ''){
              $error['telefono']='Ingrese un telefono';
            }
            if($user ['matricula']== ''){
              $error['matricula']='Ingrese una matricula';
            }
            if($user['pass1']== '' || $user['pass2']== ''){
              $error['pass']='Ingrese una contrasenia';
            }


            if(!isset($user['estudios'])){
              $error['estudio']='Ingrese estudios';
            }
if(!isset($error)){
  crear($user);
}
          }
