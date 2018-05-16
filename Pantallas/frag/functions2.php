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

function crearusu($dato){
	if (isset($_GET['empresa'])){
      $user['nombreEmpresa']=trim($dato['nombreEmpresa']);
		  $user['puesto']=trim($dato['puesto']);
		  $user['razon']=trim($dato['razon']);
}

  $user['nombreCompleto']=trim($dato['nombreCompleto']);

  $user['direccionEmail']=trim($dato['direccionEmail']);
  $user['cuit']=trim($dato['cuit']);


  $user['direccion']=trim($dato['direccion']);
  $user['telefono']=trim($dato['telefono']);
  $user['matricula']=trim($dato['matricula']);
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



  if ($user['nombreCompleto']=='') {
    $error['name']='Ingrese un nombre';
  }



  if ($user['direccionEmail']== '' ||  ! filter_var($user['direccionEmail'], FILTER_VALIDATE_EMAIL)) {
    $error['email']='Ingrese un mail valido';
  }elseif($r=existeEmail($user['direccionEmail'])){
        $error['email']='Email ya existe';
  }
  if($user['cuit']== ''){
    $error['cuit']='Ingrese un cuit';
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
  $error['no']='1';
}

  return $error;
}


function guardarUsuario($usu){
$usu=json_encode($usu);

file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);

}
