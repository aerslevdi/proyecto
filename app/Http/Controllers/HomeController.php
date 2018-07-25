<?php

namespace App\Http\Controllers;
use App\User;
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
      return view('plantillas.productos');
    }
    public function preguntas(){
      return view('plantillas.preguntas');
    }

    public function productos() {
      return view('plantillas.productos');
    }


    public function listar() {
    $usu=User::all();


      return view('plantillas.listar')
    ->with('usuarios',$usu);

    }




}
