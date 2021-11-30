<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel WorkDone</title>
    
    <!-- Tailwind CSS Link -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body class="bg-indigo-300">

    <nav class="flex py-5 bg-indigo-500 text-white border-b-8 border-pink-500">                             

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">

          @if (auth()->check())

          
          <div class="block absolute left-20 top-0 my-2 h-13 px-5 bg-white border border-gray-200 rounded-lg shadow-lg">
          
            <img src=" {{ asset('images/logo.png') }} " class="h-10 w-30 my-2">
  
          </div>


              <li>
                  <p class="text-x1 my-1">Welcome <b class="rounded-md px-5 font-bold border-2 border-white"> {{ auth()->user()->first_name}} </b></p>
              </li>

                <li class="mx-2 ">
                  <a href="#">
                    <img src=" {{asset('images/Vector.png')}}" class="h-8 w-10 top-0">
                  </a>
                </li>
              
       
              <li class="my-1">
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