<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $articulos = Articulo::all();

        $mensajes = auth()->user()->articulos;
        return view('articulos.index')->with('articulos', $articulos);
    }


    public function create()
    {
        return view('articulos.create');
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'titulo' => 'required|min:10|max:25',
            'contenido' => 'required|min:50|max:5000'

        ]);




        /* 7.Guardar datos en la bd min 2.31
        $data = request();

        DB::table('mensajes')->insert([
            'titulo' -> $data['titulo']

        ]);*/

            //Almacenar datos en bd usando modelos
            auth()->user()->articulos()->create([
                'titulo' => $data['titulo'],
                'contenido' => $data['articulo']
            ]);

            //REDIRECCIONAR NO OLVIDARLO
            return redirect()->action([ArticuloController::class, 'index']);
    }


    public function show(Articulo $articulo)
    {
        return view('articulos.show', compact('articulo'));
    }


    public function edit(Articulo $articulo)
    {
        $this->authorize('update', $articulo);
        return view('articulos.edit', compact('articulo'));
    }


    public function update(Request $request, Articulo $articulo)
    {
        $this->authorize('update', $articulo);

        $data = $request->validate([

            'titulo' => 'required|min:10|max:25',
            'contenido' => 'required|min:50|max:5000'

        ]);


        $articulo->titulo = $data['titulo'];
        $articulo->contenido = $data['contenido'];
        $articulo->save();

        return redirect()->action([ArticuloController::class, 'index']);
    }


    public function destroy(Articulo $articulo)
    {
        //Comprobamos para que no permita borrar mensajes de otro usuario
        $this->authorize('delete', $articulo);

        $articulo->delete();

        return redirect()->action([ArticuloController::class, 'index']);



    }
}
