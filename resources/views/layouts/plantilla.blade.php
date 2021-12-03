<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel WorkDone</title>
    
    <!-- Tailwind CSS Link -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body class="bg-white">

    <nav class="flex py-5 bg-colorNav text-white border-b-8 border-borNav">     
      
      <div class="block absolute left-20 top-0 my-1.5 h-13 px-5 bg-white border border-gray-200 rounded-lg shadow-lg">
          
        <img src=" {{ asset('images/logo.png') }} " class="h-10 w-30 my-2">

      </div>

        <ul class="w-1/2 px-16 ml-auto font-bold flex justify-end pt-1">

          @if (auth()->check())

          
          <div class="block absolute left-20 top-0 my-2 h-13 px-5 bg-white border border-gray-200 rounded-lg shadow-lg">
          
            <img src=" {{ asset('images/logo.png') }} " class="h-10 w-30 my-2">
  
          </div>             
              
              Log Out
              <li class="mx-1">
                
                <a href=" {{route('logout.destroy')}} ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">   
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
                </a>                
              </li>


              <li class="mx-3.5 ">
                <a href="#">
                  <img src=" {{asset('images/Vector.png')}}" class="h-8 w-10 top-0">
                </a>
              </li>          

          @endif
            
        </ul>

    </nav>

    <!-- Document body -->
    @yield('content')

    <nav class="flex py-12 bg-colorNav text-white"> 

      <div class="flex space-x-28 ml-auto mr-28 my-4">
          <div>
              <label>Copyright© 2020<br>Powered by <b>PROgresso Labs</b></label>
          </div>
          <div>
              <label>P.O. Box 902 3472 Ullamcorper Street<br>
                  Lynchburg DC 29738<br>
                  (268) 442-2428</label>
          </div>
         
        </div>            
                        
    </nav>

  </body>
</html>