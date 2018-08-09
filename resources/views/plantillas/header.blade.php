

<header>
  <div  class="menu">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
             <div class="container">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     Isolutions
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav mr-auto">

                     </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                         <!-- Authentication Links -->
                         @guest
                             <li class="nav-item">
                                 <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                             </li>
                         @else
                             <li class="nav-item dropdown">
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ucwords( Auth::user()->name ) }} <span class="caret"></span>
                                 </a>




                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                   @if (Auth::user()->email=='admin@isol.com')
                                     <a class="dropdown-item" href="/cate">
                                         {{ __('Agregar Categoria') }}
                                     </a>
                                     <a class="dropdown-item" href="/del">
                                         {{ __('Eliminar Usuario') }}
                                     </a>
                                   @endif



                                   <a class="dropdown-item" href="/perfil/{{Auth::user()->id}}">
                                       {{ __('Perfil') }}
                                   </a>


                                   <form class="" action="/mensajes" method="get">
                                       @csrf
                                     <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                     <button  class=" dropdown-item "type="submit" name="button">Mensajes</button>
                                   </form>





                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                 </div>
                             </li>
                         @endguest
                     </ul>
                 </div>
             </div>
         </nav>


  </div>
  <div class="nav">
    <div class="opcion">
      <img src="/img/home.png" alt="">
      <a href="/">Inicio</a>
    </div>
    <div class="opcion">
      <img src="/img/service.png" alt="">
          <a href="">Servicios</a>
    </div>
    <div class="opcion seva" >
      <img src="/img/envelope.png" alt="">
          <a href="">Contacto</a>
    </div>
    <div class="opcion desktop">

          <a href="">Contacto</a>
    </div>
    <div class="opcion desktop">

          <a href="/clientes">Empresas que nos eligen</a>
    </div>

  </div>

</header>

<div class="med">
  <img src="/img/este.png" alt="">
</div>
