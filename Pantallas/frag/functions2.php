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
          if(!empty($unUsuario['name'])){
    			if ($unUsuario['name'] == $empresa) {
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

  $user['name']=strtolower(trim($dato['name']));
  $user['iden']=trim($dato['iden']);

  $user['entidad']=trim($dato['entidad']);

  $user['direccionEmail']=strtolower(trim($dato['direccionEmail']));
  $user['id']=traerUltimoID();
  $user['direccion']=trim($dato['direccion']);
  $user['telefono']=trim($dato['telefono']);
  $user['pass1']=password_hash($dato['contrasenia'], PASSWORD_DEFAULT);
	  if(isset($_FILES['foto'])){
			 $user['foto']='img/' . $dato['direccionEmail'] . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);


				}
return $user;
}




function validar ($user,$sql){
 $error=[];


		if($user['name'] ==''){
			$error['name']='Ingrese una nombre';}



		if(isset($_FILES)){
	 $ext = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
			if ($ext!='') {
				if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {

					$error['avatar'] = "Formatos admitidos: JPG o PNG";
		 }
	 }}





	if($user['iden']== ''){
    $error['iden']='Ingrese un dni o razon';
  }


  if ($user['direccionEmail']== '' ||  ! filter_var($user['direccionEmail'], FILTER_VALIDATE_EMAIL)) {
    $error['email']='Ingrese un mail valido';
  }elseif($sql->ExisteMail( strtolower($user['direccionEmail']))){
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




  return $error;
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




	function traerPorId($id){

			$todos = traerTodos();

			foreach ($todos as $usuario) {
				if ($id == $usuario['id']) {
					return $usuario;
				}
			}
			return false;
		}


		function traerPorIdSql($id){
      global $db ;
      $consultaUser=$db->prepare('SELECT nombre FROM usuario WHERE id=:id');
			$consultaUser->bindValue(':id',$id);
			$consultaUser->execute();
      $namedb=$consultaUser->fetch();
			return $namedb;



			}





		function validarLogin($data) {
				$arrayADevolver = [];
				$email = trim($data['email']);
				$pass = trim($data['pass']);
				if ($email == '') {
					$arrayADevolver['email'] = 'Completá tu email';
				} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$arrayADevolver['email'] = 'Poné un formato de email válido';
				} elseif (!$usuario = existeEmail($email)) {
					$arrayADevolver['email'] = 'Este email no está registrado';
				} else {



		      	if (!password_verify($pass, $usuario["pass1"])) {
		         	$arrayADevolver['pass'] = "Credenciales incorrectas";
		      	}
				}
				return $arrayADevolver;
			}

			function validarLoginSql($data,$sql) {
				global $db;
					$arrayADevolver = [];
					$email = trim($data['email']);
					$pass1 = trim($data['pass']);

					if ($email == '') {
						$arrayADevolver['email'] = 'Completá tu email';
					} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$arrayADevolver['email'] = 'Poné un formato de email válido';
					} elseif (!$sql->ExisteMail($email)) {
						$arrayADevolver['email'] = 'Este email no está registrado';
					} else {

						$consultaUser=$db->prepare('SELECT pass FROM usuario WHERE mail=:mail');
						$consultaUser->bindValue(':mail',$email);
						$consultaUser->execute();
						$pass=$consultaUser->fetch();

							if (!password_verify($pass1,$pass['pass'])) {
								$arrayADevolver['pass'] = "Credenciales incorrectas";
							}
					}
					
					return $arrayADevolver;
				}
