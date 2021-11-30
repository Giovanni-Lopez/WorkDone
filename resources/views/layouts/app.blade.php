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
            <p class="text-2x1 font-bold">WorkDone</p>

        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

          @if (auth()->check())

              <li class="mx-8">
                  <p class="text-x1">Welcome <b> {{ auth()->user()->first_name }} </b></p>
              </li>
       
              <li>
                <a href=" {{route('logout.destroy')}} " class="font-bold 
                border-2 border-white py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
              </li>

          @else
          <li class="mx-6">
            <a href="{{route('login.iniciarSesion')}} " class="font-semibold 
            hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
          </li>

          <li>
              <a href=" {{route('register.create')}} " class="font-semibold 
              border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
          </li>

          @endif

            


        </ul>

    </nav>

    <!-- Document body -->
    @yield('content')

  </body>
</html>