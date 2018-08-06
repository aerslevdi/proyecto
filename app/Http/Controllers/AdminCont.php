<?php

namespace App\Http\Controllers;
use App\User;
use App\Categoria;
use Illuminate\Http\Request;


class AdminCont extends Controller
{
  public function del() {

      $users=User::all();
    return view('plantillas.del')->with('usuarios',$users);
  }
  public function dele(Request $request) {

      $usu = User::find($request->input('id'));
      $usu->delete();

      $users=User::all();
    return view('plantillas.del')->with('usuarios',$users);
  }

public function go(){
  return view('plantillas.cate');
}

    public function add(Request $request){

      $reglas=[
          'name' => 'required|unique:categorias|max:90',
          'desc' => 'required|max:360',

        ];

      $mensajes=['required' => 'Los campos con * son obligatorios',
                   'unique' => 'Campo ya existente',
      ];

      $this->validate($request ,$reglas,$mensajes);

      $producto= new Categoria(['name'=>$request->input('name'),
      'desc'=>$request->input('desc'),

      ]);

       $producto->save();

       return view('plantillas.cate');
    }
    public function traer(){
       $cont=User::all()->count();
       return response()->json($cont);

    }

  }
