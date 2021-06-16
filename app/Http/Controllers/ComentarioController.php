<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{


    public function store(Request $request)
    {

        $data = $request->validate([

            'contenido' => 'required|max:500'
        ]);


        $user_id = Auth::id();
        $articulo_id = $request['articuloComentado'];

        $comentario = new Comentario();
        $comentario->contenido = $data['contenido'];
        $comentario->articulo_id = $articulo_id;
        $comentario->user_id = $user_id;


        $comentario->save();

            //Redirecciona a la pagina anterior
            return redirect()->back();

    }







}
