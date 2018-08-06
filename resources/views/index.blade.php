<!DOCTYPE html>
<html >
  <head>

    @include('plantillas.head')

    <title>: : Inicio : : </title>
  </head>
  <body>

    @include('plantillas.header')

    @yield('contenido')

    @include('plantillas.footer')

    <script src="/js/validate.js"></script>
    <script src="/js/theme.js"></script>
    <script src="/js/contUsu.js"></script>
  </body>
</html>
