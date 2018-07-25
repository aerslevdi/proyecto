
@extends('index')
@section('contenido')

  <div class="quien">
    <div class="lado1">
      <h2>¿Sos profesional certificado?</h2>
    </div>
    <div class="lado2">
      <p>Sumate a nuestra red de profesionales y accedé a toda hora desde cualquier lugar a cientos de trabajos en todo el país. Elegí que servicio querés hacer. Conseguí nuevos clientes cerca de donde estes.
       Es facil, es rapido, es seguro… Es Isol.</p>
     </div>
  </div>




<h4> Trabajos Destacados</h4>
<div class="productos">

   @foreach ($productos as $p)
@php
$email = $p->name;
$hash = md5(strtolower(trim($email)));
@endphp


     <div class="producto">
      <div class="foto">
         <a href="/usuarios"><img src="https://unicornify.pictures/avatar/{{$hash}}?s=640" alt=""></a>
      </div>
      <div class="descripcion">
         <p class="titu">{{$p->name}}</p>
         <p>{{$p->desc}}</p>
      </div>
     </div>
   @endforeach




  <div class="vermas">
    <a href="/usuarios">VER MAS SERVICIOS</a>
  </div>

  </div>

@endsection
