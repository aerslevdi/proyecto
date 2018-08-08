@extends('index')
@section('contenido')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Accion</th>
      <th scope="col">Email</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>

@foreach($Mensajes as $m)

    <tr>
      <td>

        <button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal">
                     Responder
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
                              <input type="hidden" name="idre" value="{{$m->IdEnvio}}">
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





        <form class="" action="/mensajes" method="post">
            @csrf
          <input type="hidden" name="id" value="{{$m->id}}">
            <input type="hidden" name="iduser" value="{{Auth::user()->id}}">
          <button  class="btn btn-primary btn-danger"type="submit" name="button">Eliminar</button>
        </form>

      </td>

      <td><a href="/perfil/{{$m->IdEnvio}}">{{$m->email}}</a></td>
      <td class="hi">{{$m->mensj}}</td>
      <td> {{$m->created_at}}</td>
    </tr>
@endforeach


  </tbody>
</table>


@endsection
