<?php

$asunto = ['Administración', 'Call Center', 'Comercio Exterior', 'Comunicación',
 'Construcción','Diseño','Educación','Finanzas','Gastronomía','Gerencia','Ingeniería',
 'Legales','Logística','Marketing','Medicina','Minería','Oficios','Producción',
 'Recursos Humanos','Secretaría','Seguros','Tecnología','Ventas'];
$nombreCompleto='';
$nombreEmpresa='';
$direccionEmail='';
$cuit='';
$razon='';
$matricula='';
$puesto='';
$estudios='';
$direccion='';
$telefono='';
$universitario='universitario';
$terciario='terciario';
$tecnico='tecnico';
$terminos='';
$contrasenia='';
$contrasenia2='';
if ($_POST) {
  $nombreCompleto=$_POST['nombreCompleto'];
  $nombreEmpresa=$_POST['nombreEmpresa'];
  $direccionEmail=$_POST['direccionEmail'];
  $cuit=$_POST['cuit'];
  $puesto=$_POST['puesto'];
  $razon= $_POST['razon'];
  $direccion=$_POST['direccion'];
  $telefono=$_POST['telefono'];
  $matricula=$_POST['matricula'];


  if(isset($_POST['terminos'])){
      $terminos=$_POST['terminos'];
        }

  if(isset($_POST['universitario'])){
      $universitario=$_POST['univeritario'];
            }

  if(isset($_POST['terciario'])){
      $terciario=$_POST['terciario'];
            }

  if(isset($_POST['tecnico'])){
      $tecnico=$_POST['tecnico'];
            }
}
