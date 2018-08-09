@extends('index')
@section('contenido')
  @php
  $email = "admin@isol.com";
  $hash = md5(strtolower(trim($email)));        @endphp



<div class="titulo">
<br>
  <h1 class="client"> Contacto</h1>

</div>
<br>


<div class="container alt-color">
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://unicornify.pictures/avatar/{{$hash}}?s=950" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>Administrador</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+91 90000 00000</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>admin@isol.com</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.iSol.com</p></a>
                          </ul>
                      </div>
                  </div>
                </div>
@endsection
