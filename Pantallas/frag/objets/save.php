<?php
 class Json {

  function guarda( $usu){
    $usu=json_encode($usu);
    file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);
    $ok=guardarImg();

  }}
  class mysql {



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
