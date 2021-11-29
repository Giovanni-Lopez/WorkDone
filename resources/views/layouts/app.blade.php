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

    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2x1 font-bold">My Aplication</p>

        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li class="mx-4">
                <a href="{{route('login.iniciarSesion')}} " class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
            </li>

            <li>
                <a href=" {{route('register.create')}} " class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
            </li>
        </ul>

    </nav>

    <!-- Document body -->
    @yield('content')

  </body>
</html>