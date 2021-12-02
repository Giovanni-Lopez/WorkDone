@extends('layouts.app')

@section('title', 'Admin')
    
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
   

    <form action="" class="mt-4" method="GET">

        <img src=" {{ asset('images/logo.png') }} "><br>

        @csrf
        
        <input type="text" name="titulo" id="titulo" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Titulo">

        <textarea name="publish" id="publics" rows="5" class="border border-gray-700 rounded-md bg-gray-200 text-lg p-2 my-2 w-full focus:bg-white placeholder-gray-900" placeholder="Descripcion"></textarea>

        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2"> {{ $message }} </p>
        @enderror
        

        <button type="submit" class="rounded-md bg-red-500 w-full text-lg text-white font-semibold p-2 
        my-6 hover:bg-indigo-600">Send Announcement</button>

    </form>

</div>



@endsection