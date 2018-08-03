@extends('index')
@section('contenido')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
           @endforeach
       </ul>
    </div>
@endif
<br><br>
<div class="row">
  <div class="col-sm"></div>
  <div class="col-sm"><h1>Agregar Categoria</h1>
  <form method="POST"  id="form" action="/cate" >
    {{ csrf_field() }}
    <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="Nombre" >
      </div>

      <label for="Descripcion" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
      <textarea class="form-control" rows="4"  name="desc" id="Descripcion"></textarea>
        </div>
<br>
     <button type="submit" class="bg-success" name="button">Subir Categoria</button>
  </form></div>
  <div class="col-sm"></div>
</div>


@endsection
