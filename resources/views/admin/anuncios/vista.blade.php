@extends('layouts.plantilla')

@section('title', 'Listado')
    
@section('content')

<div class="bg-white pt-1">

    <div class="block mx-auto my-10 p-3 bg-white w-2/3 border border-gray-200 rounded-lg shadow-lg font-bold  text-red-600">
        <p class="text-2xl">Listado anuncios</p>
    </div>

{{-- /// --}}

<ul>
    @foreach ($anunc as $anuncio)

    
    <div class="py-8 my-8 px-8 w-2/3 mx-auto bg-blue-100 rounded-lg shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
        <table>
            <tr>
                <td>
                    <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src=" {{asset('images/Vector.png')}} " alt="Woman's Face">             
                </td>
                
            </tr>            
            <tr >
                <td >
                    <b class="rounded-md px-5 font-bold border-2 border-white"> Admin </b>
                </td>
            </tr>
        </table>        
        
        <div class="text-center space-y-2 sm:text-left overflow-auto h-32">
        <div class="space-y-0.5">            
            <p class="text-gray-500  font-medium py-5">
                <li>{{$anuncio->descripcion}}</li>
            </p>
        </div>         
        </div>
    </div>

        @endforeach
    </ul>
    
{{-- /// --}}

</div>
    @endsection


