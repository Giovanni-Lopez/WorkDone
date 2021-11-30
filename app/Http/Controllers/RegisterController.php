<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\User;

class RegisterController extends Controller
{
    //

    public function create(){
        return view('auth.register');
    }

   /*  public function store(Request $request){

        $request->validate([
            'first_name' => 'required', 
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request( ['first_name', 'last_name', 'email', 'password'] ));
        auth()->login($user);
        return redirect()->route("register.account");
    } */

    public function store(Request $request){

        $request->validate([
            'first_name' => 'required', 
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $usu = new User();

        $usu->first_name = $request->first_name;
        $usu->last_name = $request->last_name;
        $usu->email = $request->email;
        $usu->password = $request->password;

        $usu->save();

        return redirect()->to('/account');
    }    

}
