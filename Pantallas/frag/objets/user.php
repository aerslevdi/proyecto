<?php
abstract class User {

// NO DEJA DEFINIR VARIABLES CON INDICE ???

  //  private  $data['name'];
  //  private  $data['direccionEmail'];
  //  private  $data['iden'];
  //  private  $data['telefono'];
  //  private  $data['direccion'];
  //  private  $data['entidad'];
  //  private  $data['img'];
  //  private  $data['pass'];

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
