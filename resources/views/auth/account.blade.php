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

{{-- 
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img class="h-48 object-cover md:h-full md:w-48" src="{{ asset('images/logo.png') }}" alt="Man looking at item at a store">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
      </div>
    </div>
  </div> --}}

@endsection