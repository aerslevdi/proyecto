@extends('index')
@section('contenido')
  <h1>Lista de Usuarios</h1>

<br>

<div class="card-deck">
  @foreach ($usuarios as $usu)
    @php
    $email = $usu->name;
    $hash = md5(strtolower(trim($email)));
    @endphp

 <br>

    <div class="card" >
      <img class="card-img-top" src="https://unicornify.pictures/avatar/{{$hash}}?s=640" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$usu->name}}</h5>


        <div class="progress">

          <div class="progress-bar bg-warning" role="progressbar" style="width:{{$usu->ranking}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Ranking </div>
        </div><br>
        <a href="#" class="btn btn-primary">Contactar</a>
      </div>
    </div>








  @endforeach


</div>



@endsection
