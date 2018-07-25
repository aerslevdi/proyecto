<?php

namespace App\Http\Controllers;
use App\Persona;
use Illuminate\Http\Request;

class ControlUser extends Controller
{
  public function listar() {
  $usu=Persona::all();





    return view('plantillas.listar')
  ->with('usuarios',$usu);

}

public function add(Request $request){






  $reglas=[
    'name' => 'required|max:40',
    'mail' => 'required|unique:usuario|max:60|email',
    'iden' => 'required|unique:usuario|max:15',
    'telefono' => 'required|max:20',
    'direccion' => 'required|max:60',
    'entidad' => 'required',
    'contrasenia' => 'required|confirmed',
    'terminos' => 'required',
  ];



  $mensajes=['required' => 'Los campos con * son obligatorios',
             'confirmed' => 'Las contrasenias no coinciden',
             'unique' => 'Campo ya existente',



];


$this->validate($request ,$reglas,$mensajes);


$Persona= new Persona(['nombre'=>$request->input('name'),
'mail'=>$request->input('mail'),
'iden'=>$request->input('iden'),
'entidad'=>$request->input('entidad'),
'direccion'=>$request->input('direccion'),
'telefono'=>$request->input('telefono'),
'pass'=>$request->input('contrasenia'),






]);



if($request->file('foto')){
$folder= 'avatars';

$path=$request->file('foto')->store($folder,'public');



$Persona->foto= $path;
}



 $Persona->save();










}


}
