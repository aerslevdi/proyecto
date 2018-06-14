
<?php

class validador {



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
    }elseif($sql->ExisteEnti( strtolower($user['iden']))){
          $error['iden']='Dni o Razon ya existe';
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
}
