<?php
 class Json {

  function guarda( $usu){
    $usu=json_encode($usu);
    file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);
    $ok=guardarImg();

  }}
  class mysql {

   function guarda( $usu){
     //  Guardado por mysql

   }



}
