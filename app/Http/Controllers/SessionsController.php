<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Logout;

class SessionsController extends Controller
{
    //

    public function index(){

        $anunc = Anuncio::all();
        
        return view('listado.vista', compact('anunc'));
    }


    public function iniciarSesion(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'The email or passwork is incorrect, please try again'
            ]);
        }else{
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index'); 
            }else{
                return redirect()->route('/'); 
            }
        }
        
    }    

    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
