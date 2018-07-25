@extends('index')
@section('contenido')
  <h1>Lista de Usuarios</h1>




  @foreach ($usuarios as $usu)
    @php
    $email = $usu->name;
    $hash = md5(strtolower(trim($email)));
    @endphp

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://unicornify.pictures/avatar/{{$hash}}?s=640" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$usu->name}}</h5>

        <a href="#" class="btn btn-primary">Contactar</a>
      </div>
    </div>








  @endforeach




@endsection
