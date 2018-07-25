<?php

namespace App\Http\Controllers;
use App\User;
use App\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

$prod=Categoria::all();

      return view('plantillas.productos')->with('productos',$prod);
    }
    public function preguntas(){
      return view('plantillas.preguntas');
    }






    public function perfil($id){
      $usu = User::find($id);

      return view('plantillas.perfil')->with('usu',$usu);;
    }




    public function listar() {
    $usu=User::all();


      return view('plantillas.listar')
    ->with('usuarios',$usu);

    }




}
