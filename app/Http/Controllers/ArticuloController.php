<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticuloController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $articulos = Articulo::all();

        $articulos = auth()->user()->articulos;
        return view('articulos.index')->with('articulos', $articulos);
    }


    public function create()
    {
        return view('articulos.create');
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'titulo' => 'required|min:10|max:50',
            'contenido' => 'required|min:50|max:5000',
            'imagen' => 'required|image'
        ]);




            //Almacenar datos en bd usando modelos
            auth()->user()->articulos()->create([
                'titulo' => $data['titulo'],
                'contenido' => $data['contenido'],
                'imagen' => $data['imagen']->store('upload_images', 'public')
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

            'titulo' => 'required|min:10|max:50',
            'contenido' => 'required|min:50|max:5000'
        ]);
            //->store('upload_images', 'public')

        $articulo->titulo = $data['titulo'];
        $articulo->contenido = $data['contenido'];

        if(request('imagen')){
            $data1 = $request;


            //$ruta_imagen = $request['imagen']->store('upload_images', 'public');
            $articulo->imagen = $data1['imagen']->store('upload_images', 'public');
        }


        $articulo->save();
        //PENDIENTE: arreglar el que se pueda actualizar miniatura
        //'imagen' => $data['imagen']->store('upload_images', 'public')


        return redirect()->action([ArticuloController::class, 'index']);
    }


    public function destroy(Articulo $articulo)
    {
        //Comprobamos para que no permita borrar mensajes de otro usuario
        $this->authorize('delete', $articulo);

        $articulo->delete();

        return redirect()->action([ArticuloController::class, 'index']);



    }

    /*
    public function inicio()
    {
        $articulos = Articulo::all();
        return view('inicio')->with('articulos', $articulos);
    }*/





}
