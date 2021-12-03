@extends('layouts.app')

@section('title', 'Admin')
    
@section('content')

<div class="block mx-auto font-bold my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
   

    

    <form action=" {{route('admin.store')}} " class="mt-4" method="POST">

        @csrf

        <img src=" {{ asset('images/logo.png') }} "><br>
        
        <label>Title of the news
            <input type="text" name="titulo" id="titulo" class="border border-gray-700 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white focus:outline-none focus:ring focus:border-blue-300">
        </label>                       
        @error('titulo')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2"> {{ $message }} </p>
        @enderror

        <label>Description of the news
            <textarea name="descripcion" id="descripcion" rows="5" class="border border-gray-700 rounded-md bg-gray-200 text-lg p-2 my-2 w-full focus:bg-white focus:outline-none focus:ring focus:border-blue-300"></textarea>
        </label>

        @error('descripcion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2"> {{ $message }} </p>
        @enderror
        
        
        <button type="submit" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110  rounded-md bg-red-500 w-80 text-lg text-white font-semibold p-2
        mt-5 ml-6 hover:bg-indigo-600">Send Announcement</button>

    </form>

</div>



@endsection