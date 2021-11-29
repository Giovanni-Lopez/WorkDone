<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function iniciarSesion(){
        return view('auth.login');
    }
}
