<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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

        $categorias = Categoria::all();


        return view('articulos.create', compact('categorias'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'titulo' => 'required|min:10|max:50',
            'contenido' => 'required|min:50|max:5000',
            'imagen' => 'required|image'
        ]);

        //dd($request);
        //dd($request['enableComentary']);

        /*
            //Almacenar datos en bd usando modelos
            auth()->user()->articulos()->create([
                'titulo' => $data['titulo'],
                'contenido' => $data['contenido'],
                'imagen' => $data['imagen']->store('upload_images', 'public'),
                'enableComentary' => $request['enableComentary'],
            ]);
        */
        $user_id = Auth::id();
        $articulo = new Articulo();
        $articulo->titulo = $data['titulo'];
        $articulo->contenido = $data['contenido'];
        $articulo->imagen = $data['imagen']->store('upload_images', 'public');
        $articulo->user_id = $user_id;
        $articulo->enableComentary = $request['enableComentary'];


        $articulo->save();










            $articulo_id = Articulo::where('titulo', $data['titulo'])->take(1)->get();


            //dd($request->categorias);
           // dd($request);



        //Con esto permito la creación de artículos sin tener que especificar categorías
        if($request->categorias!=null){
            foreach ($request->categorias as $categoria) {
                DB::table('articulo_categoria')->insert([
                    'articulo_id' => $articulo_id[0]->id,
                    'categoria_id' => $categoria,
                ]);
            }
        }









            //REDIRECCIONAR NO OLVIDARLO
            return redirect()->action([ArticuloController::class, 'index']);
    }


    public function show(Articulo $articulo)
    {
        //$categoriaraw = DB::select('SELECT categoria_id FROM articulo_categoria WHERE articulo_id = '. $articulo->id .'');
        //$categorias =  DB::select('SELECT * FROM categorias WHERE id = '. $categoriaraw->id_categoria .'');
        $categorias = DB::select('SELECT * FROM categorias INNER JOIN articulo_categoria ON categorias.id = articulo_categoria.categoria_id WHERE articulo_id = '. $articulo->id .';');

        $usuario = User::where('id', $articulo->user_id)->take(1)->get();
        $usuario1 = $usuario->first();
        //dd($usuario);
        //dd(Auth::id());
        $propietario = false;


        if(Auth::id()===$usuario1->id){
            $propietario = true;
        }


        $comentarios = Comentario::where('articulo_id', $articulo->id)->orderBy('created_at','DESC')->get();
        $usuarios = User::all();
        //dd($comentarios);

        return view('articulos.show', compact('articulo', 'categorias','usuario1', 'propietario', 'comentarios','usuarios'));
    }


    public function edit(Articulo $articulo)
    {
        $this->authorize('update', $articulo);
        $categorias = Categoria::all();




        return view('articulos.edit', compact('articulo', 'categorias'));
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
        $articulo->enableComentary = $request['enableComentary'];

        if(request('imagen')){
            $data1 = $request;


            //$ruta_imagen = $request['imagen']->store('upload_images', 'public');
            $articulo->imagen = $data1['imagen']->store('upload_images', 'public');
        }


        $articulo->save();

        //Si el usuario no selecciona categorias se queda tal y como esta, en cambio si selecciona categorias
        //aunque sean las mismas borramos las anteriores y guardamos las nuevas


        if($request->categorias!=null){
            //DELETE FROM articulo_categoria WHERE articulo_id='. $articulo->id .';
            DB::table('articulo_categoria')->where('articulo_id', $articulo->id)->delete();


            foreach ($request->categorias as $categoria) {
                DB::table('articulo_categoria')->insert([
                    'articulo_id' => $articulo->id,
                    'categoria_id' => $categoria,
                ]);
            }
        }








        return redirect()->action([ArticuloController::class, 'index']);
    }


    public function destroy(Articulo $articulo)
    {
        //Comprobamos para que no permita borrar mensajes de otro usuario
        $this->authorize('delete', $articulo);

        $articulo->delete();

        return redirect()->action([ArticuloController::class, 'index']);



    }

    /*HECHO EN OTRO CONTROLADOR
    public function inicio()
    {
        $articulos = Articulo::all();
        return view('inicio')->with('articulos', $articulos);
    }*/





}
