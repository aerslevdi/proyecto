@extends('index')
@section('contenido')
<h1>categorias</h1>


<br>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row">
  @foreach ($productos as $p)
  @php
  $email = $p->name;
  $hash = md5(strtolower(trim($email)));
  @endphp




   <div class="col-sm-3">
     <br>
      <div class="card">
  <a href="/usuarios{{$p->id}}">
     <img  src="https://unicornify.pictures/avatar/{{$hash}}?s=640"  class="img-thumbnail tam" /></a>

       <div class="content">
         <p class="titu">{{$p->name}}</p>
         <p>{{$p->desc}}</p>





                            </div>
                          </div>
                        </div>

                   </div>
               </div>
           </div>


<br>










@endforeach





@endsection
