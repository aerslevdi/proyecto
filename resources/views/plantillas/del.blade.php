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
  <h1>Eliminar Usuario</h1>
  <form method="POST"  action="/del" >
    {{ csrf_field() }}
    <label for="Nombre" class="col-sm-2 col-form-label">Usuarios</label>
      <div class="col-sm-10">
        <select class="" name="id">
     @foreach($usuarios as $usuario)
          <option value="{{$usuario->id}}">{{$usuario->name}}</option>
          @endforeach
        </select>
      </div>
     <button type="submit" class="bg-success" name="button">Eliminar Usuario</button>
  </form>


@endsection
