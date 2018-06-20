<?php

class Auth{



  function loguear($usuario) {

  	   $_SESSION['id'] = $usuario['id'];

  		header('location: index.php');
  		exit;
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








}
