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






  class Mysql {

   private $dns;
   private $user;
   private $pass;

   function __construct(){
     $this->dns='mysql:host=localhost;dbname=isoldb;charset=utf8mb4;port=3306';
     $this->user='root';
     $this->pass='';

     try {
      $this->db=new PDO( $this->dns, $this->user, $this->pass);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     } catch (Exception $e) {
        echo $e->getMessage();
     }




   }

   function getdb(){
     return $this->db;
   }
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
   try {
     $consultaMail=  $this->db->prepare('SELECT mail  FROM usuario
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

   try {
     $consultaMail=  $this->db->prepare('SELECT iden  FROM usuario
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

        $consultaUser=$this->db->prepare('SELECT nombre FROM usuario WHERE id=:id');
  			$consultaUser->bindValue(':id',$id);
  			$consultaUser->execute();
        $namedb=$consultaUser->fetch();
  			return $namedb;

  			}

   function guarda(user $usu){

     $dato=$usu->getData();


  $insertUser=$this->db->prepare('INSERT INTO usuario VALUES(DEFAULT,:nombre,:mail,now(),:iden,:dire,:tel,:entidad,:foto,:pass)');
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
