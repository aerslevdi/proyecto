@extends('index')
@section('contenido')

<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ucwords($usu->name)}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">

                @php
                $email = $usu->email;
                $hash = md5(strtolower(trim($email)));        @endphp

                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src='https://unicornify.pictures/avatar/{{$hash}}?s=640'  class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <td>Direccion</td>
                        <td><p class="in">{{ucwords($usu->direccion)}}</p>

                      </tr>


                      <tr>
                      <td>Telefono</td>
                      <td><p class="in">{{($usu->telefono)}}</p>

                    </tr>
                      <tr>
                      <td>Email</td>
                      <td><p class="in">    {{ucwords($usu->email)}}</p>

                    </tr>





                    </tbody>
                  </table>

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Contaco
                  </button>



                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
@endsection
