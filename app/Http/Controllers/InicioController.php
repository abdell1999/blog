<?php

namespace App\Http\Controllers;
use App\Models\Articulo;
use Illuminate\Http\Request;

class InicioController extends Controller
{


    public function index(){
        $articulos = Articulo::paginate(12);
        return view('inicio')->with('articulos', $articulos);
    }

}
