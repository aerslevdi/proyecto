<?php
abstract class User {



  private  $data;


      function __construct($user){
        $this->data['name']=$user['name'];
        $this->data['direccionEmail']=$user['direccionEmail'];
        $this->data['iden']=$user['iden'];
        $this->data['telefono']=$user['telefono'];
        $this->data['direccion']=$user['direccion'];
        $this->data['entidad']=$user['entidad'];

        $this->data['pass']=$user['pass1'];
        if($user['foto']){
          $this->data['foto']=$user['foto'];
        }

      }

    function getData(){
      return $this->data;
    }




   }
   class Persona extends User {


     // Metodos de Persona
   }



   class Empresa extends User {


          // Metodos de Empresa
   }
