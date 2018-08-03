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
    <script type="text/javascript" src="js/cosa.js">
    </script>
<script type="text/javascript" src="js/validate.js">
</script>
  </body>
</html>
