<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anuncio;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AnuncioController extends Controller
{
    public function index(){
        return view('admin.anuncios.index');
    }

    public function create(){
        return view('admin.anuncios.create');
    }

    public function store(Request $request){

        $anuncio = new Anuncio;

        $anuncio->titulo = $request->titulo;
        $anuncio->descripcion = $request->descripcion;  

        $anuncio->save();

        return redirect()->route('admin.index');

    }  

    public function vista(){

        $anunc = Anuncio::all();

        return view('admin.anuncios.vista', compact('anunc'));
    }
}
