<?php




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

    			if ($unUsuario['nombreEmpresa'] == $empresa) {
    				return $unUsuario;
    			}
    		}
    		return false;
    	}



			function traerUltimoID(){
					// me traigo todos los usuarios
					$usuarios = traerTodos();
					if (count($usuarios) == 0) {
						return 1;
					}
					// En caso de que haya usuarios agarro el ultimo usuario
					$elUltimo = array_pop($usuarios);
					// Pregunto por le ID de ese ultimo usuario
					$id = $elUltimo['id'];
					// A ese ID le sumo 1, para asignarle el nuevo ID al usuario que se esta registrando
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


  $user['direccionEmail']=trim($dato['direccionEmail']);


  $user['id']=traerUltimoID();
  $user['direccion']=trim($dato['direccion']);
  $user['telefono']=trim($dato['telefono']);

  $user['pass1']=trim($dato['contrasenia']);
  $user['pass2']=trim($dato['contrasenia2']);
  if(isset($dato['estudios'])){
  $user['estudios']=trim($dato['estudios']);
}
  if(isset($dato['terminos'])){
      $user['terminos']=$dato['terminos'];
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

  if($user['pass1']== '' || $user['pass2']== ''){
    $error['pass']='Ingrese una contrasenia';
  }


  if(!isset($user['estudios'])){
    $error['estudio']='Ingrese estudios';
  }

  if(isset($error)){
		  return $error;
	}

  return $error;
}


function guardarUsuario($usu){
$usu=json_encode($usu);

file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);

}
