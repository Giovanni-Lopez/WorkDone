<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel WorkDone</title>
    
    <!-- Tailwind CSS Link -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body class="bg-green-400">

    <!-- Document body -->
    @yield('content')

  </body>
</html>