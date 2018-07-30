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


        <div class="progress">

          <div class="progress-bar bg-warning" role="progressbar" style="width:{{$usu->ranking}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Ranking </div>
        </div><br>
        <a href="#" class="btn btn-primary">Contactar</a>
      </div>
    </div>








  @endforeach
  <nav aria-label="...">
    <ul class="pagination pagination-sm">
      <li class="page-item disabled">
        <a class="page-link" href="/usuarios" tabindex="-1">1</a>
      </li>
      <li class="page-item"><a class="page-link" href="/usuarios">2</a></li>
      <li class="page-item"><a class="page-link" href="/usuarios">3</a></li>
    </ul>
  </nav>



@endsection
