<?php
 class Json {
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

   	function traerPorId($id){

   			$todos = traerTodos();

   			foreach ($todos as $usuario) {
   				if ($id == $usuario['id']) {
   					return $usuario;
   				}
   			}
   			return false;
   		}


  function guarda( $usu){
    $usu=json_encode($usu);
    file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);
    $ok=guardarImg();

  }}






  class mysql {



    function guardarIMg($file,$po){


    		$nombreArchivo = $file['foto']['name'];

    		$ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

    		$archivoFisico = $file['foto']['tmp_name'];
    		$dondeEstoyParado = dirname(__FILE__);
    			$rutaFinalConNombre = $dondeEstoyParado . '/img/' . $po['direccionEmail'] . '.' . $ext;

    			move_uploaded_file($archivoFisico, $rutaFinalConNombre);
    			return true;
    }


  function ExisteMail($mail){
    global $db;
   try {
     $consultaMail=  $db->prepare('SELECT mail  FROM usuario
        where mail=:email');
     $consultaMail->bindValue(':email',$mail,PDO::PARAM_STR);
     $consultaMail->execute();
     $maildb=$consultaMail->fetch();
     if($maildb){
       return true;
     }
     return false;

   } catch (Exception $e) {
        return false;
   }

  }

  function ExisteEnti($enti){
    global $db;
   try {
     $consultaMail=  $db->prepare('SELECT iden  FROM usuario
        where iden=:iden');
     $consultaMail->bindValue(':iden',$enti,PDO::PARAM_STR);
     $consultaMail->execute();
     $maildb=$consultaMail->fetch();
     if($maildb){
       return true;
     }
     return false;

   } catch (Exception $e) {
        return false;
   }

  }

  		function traerPorIdSql($id){
        global $db ;
        $consultaUser=$db->prepare('SELECT nombre FROM usuario WHERE id=:id');
  			$consultaUser->bindValue(':id',$id);
  			$consultaUser->execute();
        $namedb=$consultaUser->fetch();
  			return $namedb;



  			}




   function guarda(user $usu){
         global $db;
     $dato=$usu->getData();




  $insertUser=$db->prepare('INSERT INTO usuario VALUES(DEFAULT,:nombre,:mail,now(),:iden,:dire,:tel,:entidad,:foto,:pass)');
        $insertUser->bindValue(':nombre',$dato['name'],PDO::PARAM_STR);
        $insertUser->bindValue(':mail',$dato['direccionEmail'],PDO::PARAM_STR);
        $insertUser->bindValue(':iden',$dato['iden'],PDO::PARAM_STR);
        $insertUser->bindValue(':dire',$dato['direccion'],PDO::PARAM_STR);
        $insertUser->bindValue(':tel',$dato['telefono'],PDO::PARAM_STR);
        $insertUser->bindValue(':entidad',$dato['entidad'],PDO::PARAM_STR);
        $insertUser->bindValue(':foto',$dato['foto'],PDO::PARAM_STR);
        $insertUser->bindValue(':pass',$dato['pass'],PDO::PARAM_STR);


        $insertUser->execute();





   }



}
