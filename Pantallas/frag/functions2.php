<?php


session_start();

if (isset($_COOKIE['isolid'])) {
	$_SESSION['id'] = $_COOKIE['isolid'];
}


$dns='mysql:host=localhost;dbname=isoldb;charset=utf8mb4;port=3306';
$db_user='root';
$db_pass='root';

try {
  $db=new PDO($dns,$db_user,$db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
   echo $e->getMessage();
}



function crearusu($dato){

  $user['name']=strtolower(trim($dato['name']));
  $user['iden']=trim($dato['iden']);

  $user['entidad']=trim($dato['entidad']);

  $user['direccionEmail']=strtolower(trim($dato['direccionEmail']));
  $user['direccion']=trim($dato['direccion']);
  $user['telefono']=trim($dato['telefono']);
  $user['pass1']=password_hash($dato['contrasenia'], PASSWORD_DEFAULT);
	  if(isset($_FILES['foto'])){
			 $user['foto']='img/' . $dato['direccionEmail'] . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);


				}
return $user;
}



function guardarIMg(){


		$nombreArchivo = $_FILES['foto']['name'];

		$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

		$archivoFisico = $_FILES['foto']['tmp_name'];
		$dondeEstoyParado = dirname(__FILE__);
			$rutaFinalConNombre = $dondeEstoyParado . '../../img/' . $_POST['direccionEmail'] . '.' . $ext;

			move_uploaded_file($archivoFisico, $rutaFinalConNombre);
			return true;
}



function loguear($usuario) {

	   $_SESSION['id'] = $usuario['id'];

		header('location: index.php');
		exit;
	}
