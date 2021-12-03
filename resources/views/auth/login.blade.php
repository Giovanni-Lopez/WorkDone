@extends('layouts.app')

@section('title', 'Login')
    
@section('content')

<div class="block mx-auto my-12 p-8 font-bold bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg ">
   

    <form action="" class="mt-4" method="post">

        <img class="transform scale-x-100 w-full" src=" {{ asset('images/logo.png') }} "><br>

        @csrf
        
        <label>Email
        <input type="email" name="email" id="email" class="border border-gray-400 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900  p-2 my-2 shadow-md focus:bg-white focus:outline-none focus:ring focus:border-blue-300" placeholder="">
        </label>
        <br>
        <label >Password
        <input type="password" name="password" id="password" class="border border-gray-400 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 shadow-md focus:bg-white focus:outline-none focus:ring focus:border-blue-300" placeholder="">
        </label>

        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2"> {{ $message }} </p>
        @enderror        

        
        <button class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110  rounded-md bg-red-500 w-80 text-lg text-white font-semibold p-2
        mt-5 ml-7 hover:bg-indigo-600">Sign In</button>

    </form>

</div>

    

@endsection