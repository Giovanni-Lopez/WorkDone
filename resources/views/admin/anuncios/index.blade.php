@extends('layouts.app')

@section('title', 'Admin')
    
@section('content')

<div class="block mx-auto my-32 p-10 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg px-12">

    <img src=" {{ asset('images/logo.png') }} "><br>


        <label class="px-3.5">Do you want to make a new ad?</label>
    
        <a href=" {{route('admin.create')}} ">
            <button type="submit"  class="rounded-md text-lg text-red-500 font-bold p-2 
            my-3 hover:underline bg-transparent">New Ad</button>
        </a>
    
    

</div>


@endsection