@extends('layouts.apt')

@section('title', 'Activate')
    
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg px-10">

    <img src=" {{ asset('images/logo.png') }} "><br>

    <label>Your account has been created, please </label>
    
<a href=" {{route('login.iniciarSesion')}} ">
    <button type="submit"  class="rounded-md text-lg text-red-500 font-bold p-2 
    my-3 hover:underline bg-transparent">Log In</button>
</a>

</div>

@endsection