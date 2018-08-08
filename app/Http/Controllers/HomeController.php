<?php

namespace App\Http\Controllers;
use App\User;
use App\Contact;
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

$prod=Categoria::all()->take(6);

      return view('plantillas.productos')->with('productos',$prod);
    }
    public function preguntas(){
      return view('plantillas.preguntas');
    }






    public function perfil($id){
      $usu = User::find($id);

      return view('plantillas.perfil')->with('usu',$usu);;
    }






    public function listar($id) {
    $usu=User::all()->where('cate', $id);
;


      return view('plantillas.listar')
    ->with('usuarios',$usu);

    }


       function Contac(Request $request){
            $reglas=[

                'mensaje' => 'required',
              ];
            $mensajes=['required' => 'Campo sin completar',    ];

            $this->validate($request ,$reglas,$mensajes);

            $mensj= new Contact(['IdRe'=>$request->input('idre'),
             'mensj'=>$request->input('mensaje'),
             'IdEnvio'=>$request->input('idEnvio'),
             'email'=>$request->input('email'),
            ]);
            $mensj->save();


            $prod=Categoria::all()->take(6);

                  return view('plantillas.productos')->with('productos',$prod);

             }

             function mensj(Request $request){
               $cont=Contact::all()->where('IdRe', $request->input('id'));
              return view('plantillas.mensaje') ->with('Mensajes',$cont);
             }

             function mensjD(Request $request){
                 $msj = Contact::find($request->input('id'));
                 $msj->delete();

                 $cont=Contact::all()->where('IdRe', $request->input('iduser'));
                 return view('plantillas.mensaje') ->with('Mensajes',$cont);



        

               }



}
