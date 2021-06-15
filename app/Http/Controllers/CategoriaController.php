<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categoria = Categoria::all();
        return view('categorias.index')->with('categorias', $categoria);
    }



    public function create()
    {
        return view('categorias.create');
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'nombre' => 'required|min:6|max:50',
            'descripcion' => 'required|min:50|max:5000'
        ]);

            Categoria::create([
                'nombre' => $data['nombre'],
                'descripcion' => $data['descripcion']
            ]);

            return redirect()->action([CategoriaController::class, 'index']);
    }

    public function edit(Categoria $categoria)
    {

        return view('categorias.edit', compact('categoria'));
    }






    public function update(Request $request, Categoria $categoria)
    {


        $data = $request->validate([

            'nombre' => 'required|min:6|max:50',
            'descripcion' => 'required|min:50|max:5000'
        ]);


        $categoria->nombre = $data['nombre'];
        $categoria->descripcion = $data['descripcion'];




        $categoria->save();


        return redirect()->action([CategoriaController::class, 'index']);
    }





    public function destroy(Categoria $categoria)
    {

        $categoria->delete();

        return redirect()->action([CategoriaController::class, 'index']);



    }

}
