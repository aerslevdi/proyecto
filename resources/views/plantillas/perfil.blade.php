@extends('index')
@section('contenido')

<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ucwords($usu->name)}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">

                @php
                $email = $usu->email;
                $hash = md5(strtolower(trim($email)));        @endphp

                @if ($usu->foto==1)
                   <img  src="https://unicornify.pictures/avatar/{{$hash}}?s=740" class=" tam img-thumbnail" />
                @else
                     <img src="{{Storage::url($usu->foto)}}" class=" tam img-thumbnail">
            @endif

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <td>Direccion</td>
                        <td><p class="in">{{ucwords($usu->direccion)}}</p>

                      </tr>


                      <tr>
                      <td>Telefono</td>
                      <td><p class="in">{{($usu->telefono)}}</p>

                    </tr>
                      <tr>
                      <td>Email</td>
                      <td><p class="in">    {{ucwords($usu->email)}}</p>

                    </tr>





                    </tbody>
                  </table>

                  <!-- Button trigger modal -->
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                               Contactar
                             </button>

                             <!-- Modal -->
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                     </button>
                                   </div>



                                   <div class="modal-body">

                                     <form method="POST" action="/usuarios{{1}}" >
                                       {{ csrf_field() }}
                                      <input type="hidden" name="email" value="{{Auth::user()->email}}">
                                        <input type="hidden" name="idre" value="{{$usu->id}}">
                                       <input type="hidden" name="idEnvio" value="{{Auth::user()->id}}">
                                         <label for="mensaje" class="col-sm-2 col-form-label">Mensaje</label>
                                           <div class="col-sm-9">
                                         <textarea class="form-control" rows="4"  name="mensaje" id="mensaje"></textarea>
                                           </div>




                                   <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                     <button type="submit" class="btn btn-primary">Enviar</button>
                                   </div></form></div>
                                 </div>
                               </div>
                             </div>



                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
@endsection
