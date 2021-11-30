@extends('layouts.app')

@section('title', 'Register')
    
@section('content')
    
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">    

    <form action="" class="mt-4" method="post">
        @csrf

        <img src=" {{ asset('images/logo.png') }} ">

        <label>First name
        <input type="text" name="first_name" id="first_name" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="">
        </label>

        <label>Last name            
            <input type="text" name="last_name" id="last_name" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="">
        </label>        

        <label>Email
        <input type="email" name="email" id="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="">
        </label>

        <label>Password
        <input type="password" name="password" id="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="">
        </label>

        <label>Confirm password
        <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="">
        </label>

        <button type="submit"  class="rounded-md bg-red-500 w-full text-lg text-white font-semibold p-2 
        my-3 hover:bg-indigo-600">Sign Up</button>

    </form>

</div>

@endsection