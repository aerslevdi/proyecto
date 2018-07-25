@extends('index')
@section('contenido')
  <h1>Lista de Usuarios</h1>

  <ul>



  @foreach ($usuarios as $value)


    <div class="alert alert-info" role="alert">

         <img src="public/{{$value->foto}}" alt="">

        <li> <h3>{{$value->name}}</h3>
        <p>E-Mail: {{$value->email}}  </p>
       Tel : {{$value->telefono}}
        </li>
    </div>


  @endforeach

  </ul>


@endsection
