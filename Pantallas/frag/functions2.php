<?php


session_start();

if (isset($_COOKIE['isolid'])) {
	$_SESSION['id'] = $_COOKIE['isolid'];
}

function traerTodos() {

		$todosJson = file_get_contents('../datos/dato.json');

		$usuariosArray = explode(PHP_EOL, $todosJson);

		array_pop($usuariosArray);

		$todosPHP = [];

		foreach ($usuariosArray as $usuario) {
			$todosPHP[] = json_decode($usuario, true);
		}
		return $todosPHP;
	}

  function existeEmail($email){

  		$todos = traerTodos();

  		foreach ($todos as $unUsuario) {

  			if ($unUsuario['direccionEmail'] == $email) {
  				return $unUsuario;
  			}
  		}
  		return false;
  	}

    function existeEmpresa($empresa){
    		$todos = traerTodos();
    		foreach ($todos as $unUsuario) {
          if(!empty($unUsuario['nombreEmpresa'])){
    			if ($unUsuario['nombreEmpresa'] == $empresa) {
    				return $unUsuario;
    			}
    		}}
    		return false;
    	}



			function traerUltimoID(){

					$usuarios = traerTodos();
					if (count($usuarios) == 0) {
						return 1;
					}

					$elUltimo = array_pop($usuarios);

					$id = $elUltimo['id'];

					return $id + 1;
				}


function crearusu($dato){


	if (isset($_GET['empresa'])){
      $user['nombreEmpresa']=trim($dato['nombreEmpresa']);
		  $user['puesto']=trim($dato['puesto']);
		  $user['razon']=trim($dato['razon']);
}
	if (!isset($_GET['empresa'])){
  $user['nombreCompleto']=trim($dato['nombreCompleto']);
  $user['cuit']=trim($dato['cuit']);
  $user['matricula']=trim($dato['matricula']); }

		  $user['area']=trim($dato['area']);
  $user['direccionEmail']=trim($dato['direccionEmail']);


  $user['id']=traerUltimoID();
  $user['direccion']=trim($dato['direccion']);
  $user['telefono']=trim($dato['telefono']);

  $user['pass1']=password_hash($dato['contrasenia'], PASSWORD_DEFAULT);

  if(isset($dato['estudios'])){
  $user['estudios']=trim($dato['estudios']);
}

				 if(isset($_FILES['perfil'])){
					 $user['foto']='img/' . $dato['direccionEmail'] . '.' . pathinfo($_FILES['perfil']['name'], PATHINFO_EXTENSION);


				}
return $user;
}




function validar ($user){
 $error=[];





	if (isset($_GET['empresa'])){
		if($user['nombreEmpresa'] ==''){
			$error['empresa']='Ingrese una empresa';
		}elseif($r=existeEmpresa($user['nombreEmpresa'])){
					$error['empresa']='Empresa ya existente';
		}
		if($user['puesto']== ''){
	    $error['puesto']='Ingrese un puesto';
	  }


}

	if (!isset($_GET['empresa'])){
		if(!isset($user['estudios'])){
	    $error['estudio']='Ingrese estudios';
	  }
		if(isset($_FILES)){
	 $ext = strtolower(pathinfo($_FILES['perfil']['name'], PATHINFO_EXTENSION));
			if ($ext!='') {
				if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {

					$error['avatar'] = "Formatos admitidos: JPG o PNG";
		 }
	 }}
  if ($user['nombreCompleto']=='') {
    $error['name']='Ingrese un nombre';
  }
	if($user['cuit']== ''){
    $error['cuit']='Ingrese un cuit';
  }
	if($user ['matricula']== ''){
    $error['matricula']='Ingrese una matricula';
  }}

  if ($user['direccionEmail']== '' ||  ! filter_var($user['direccionEmail'], FILTER_VALIDATE_EMAIL)) {
    $error['email']='Ingrese un mail valido';
  }elseif($r=existeEmail($user['direccionEmail'])){
        $error['email']='Email ya existe';
  }


  if($user['direccion']== ''){
    $error['direccion']='Ingrese un direccion';
  }
  if($user['telefono']== ''){
    $error['telefono']='Ingrese un telefono';
  }

  if($user['pass1']== '' || $_POST['contrasenia2']== ''){
    $error['pass']='Ingrese una contrasenia';
  }elseif(! password_verify($_POST['contrasenia2'],$user['pass1'])){
	    $error['pass']='Las contrasenias no coinciden';
	  }

		if(!isset($_POST['terminos'])){
	    $error['terminos']='Acepte los terminos y condiciones';
	  }


  if(isset($error)){
		  return $error;
	}

  return $error;
}

function guardarIMg(){


		$nombreArchivo = $_FILES['perfil']['name'];

		$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

		$archivoFisico = $_FILES['perfil']['tmp_name'];
		$dondeEstoyParado = dirname(__FILE__);
			$rutaFinalConNombre = $dondeEstoyParado . '../../img/' . $_POST['direccionEmail'] . '.' . $ext;

			move_uploaded_file($archivoFisico, $rutaFinalConNombre);
			return true;
}
function guardarUsuario($usu){
$usu=json_encode($usu);

file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);
if (!isset($_GET['empresa'])){
$ok=guardarImg();}
return $usu;
}


function loguear($usuario) {

	   $_SESSION['id'] = $usuario['id'];
		 setcookie("isolid", $usuario['id'], time() + 3600 * 24 * 30);
		header('location: index.php');
		exit;
	}

	function traerPorId($id){

			$todos = traerTodos();

			foreach ($todos as $usuario) {
				if ($id == $usuario['id']) {
					return $usuario;
				}
			}
			return false;
		}
