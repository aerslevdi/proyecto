@extends('index')

@section('contenido')






<div class="container alt-color">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>
  @if ($errors->any())
                  <div class="alert alert-secondary" role="alert">

                        <p>Hay campos con errores</p>

                  </div>  @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"  id="form" aria-label="{{ __('Register') }}"
                    enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('*Nombre Completo/Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="ej:Pablo Gomez,ej:Telefonica" . autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('*Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ejemplo@exp.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="iden" class="col-md-4 col-form-label text-md-right">{{ __('*DNI/CUIT') }}</label>

                            <div class="col-md-6">
                                <input id="iden" type="text" class="form-control{{ $errors->has('iden') ? ' is-invalid' : '' }}" name="iden" value="{{ old('iden') }}" placeholder="2312743421"  >

                                @if ($errors->has('iden'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('iden') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cate" class="col-md-4 col-form-label text-md-right">{{ __('*Area de trabajo') }}</label>

                            <div class="col-md-6">
                                <select class="" name="cate">
                                <option value="" selected>Seleccione aqui</option>
                            <option value="1" >Diseño</option>
                            <option value="2" >Judicial</option>
                            <option value="3">Arquitectura</option>
                            <option value="4">Medicina</option>
                            <option value="5">Tecnologia</option>
                            <option value="6">Motivacion Empresarial</option>

                                </select>
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('*Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" placeholder="(011)15-743421" .>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('*Direccion de Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" placeholder="Buenos Aires" value="{{ old('direccion') }}" .>

                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="entidad" class="col-md-4 col-form-label text-md-right">{{ __('Entidad') }}</label>

                            <div class="col-md-6">

                                <select class="" name="entidad">
                                  <option value="0">Empresa</option>
                                  <option value="1">Persona</option>


                                </select>



                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto perfil o Logo:') }}</label>
                            <div class="col-md-6">
                                <input type="file" name="foto">

                                </select>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" .>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Comfirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" .>
                            </div>
                        </div>

                      <div class="form-group row">
                          <label for="mailing" class="col-md-4 col-form-label text-md-right">{{ __('Desea recibir noticias ?') }}</label>
                          <div class="col-md-6">
                            <input type="checkbox" name="mailing"  value="">
                              </select>
                          </div>
                        </div>



                      <div class="form-group row">
                          <label for="terminos" class="col-md-4 col-form-label text-md-right">{{ __('Acepto terminos y condiciones') }}</label>
                          <div class="col-md-6">
                            <input type="checkbox" name="terminos"  value="1">
                              </select>
                          </div>
                        </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrate') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
