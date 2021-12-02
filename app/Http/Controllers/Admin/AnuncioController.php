<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Anuncio;

class AnuncioController extends Controller
{
    public function index(){
        return view('admin.anuncios.index');
    }

    public function create(){
        return view('admin.anuncios.create');
    }

    public function store(Request $request){

        $request->validate([
            'titulo' => 'required', 
            'publics' => 'required',
        ]);

        $usu = new User();

        $usu->titulo = $request->titulo;
        $usu->publics = $request->last_name;       

        $usu->save();

        return redirect()->to('/index');
    }  

    public function show($id){

    }
}
