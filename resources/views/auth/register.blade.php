@extends('layouts.app')

@section('title', 'Register')
    
@section('content')
    
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <h1  class="text-pink-900 text-3x1 text-center font-bold" >Register</h1>

    <form action="" class="mt-4" method="post">

        <input type="text" name="name" id="name" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name">

        <input type="email" name="email" id="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email">

        <input type="password" name="password" id="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password">

        <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password Confirmation">

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 
        my-3 hover:bg-indigo-600">Send</button>

    </form>

</div>

@endsection