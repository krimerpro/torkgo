<!doctype html>
<html lang="en-US" class="no-js no-svg">
  <head>
     @include('includes.head')
  </head>

  <body>
     @include('includes.header')

     @yield('content')

     @include('includes.footer')
  </body>
</html>
