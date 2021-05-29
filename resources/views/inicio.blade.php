@extends ('layouts.app')

@section('content')
<h1 class="text-center mt-3">Articulos más Recientes</h1>
        <hr>
        <div class="row">
            @foreach ($articulos as $articulo)
                <div class="col-lg-2 col-sm-6 text-center">
                    <a href="{{ route('articulos.show', ['articulo'=> $articulo->id]) }}">
                        <img src="{{ route('ruta.index') }}/storage/{{ $articulo->imagen }}" alt="Miniatura" height="150" width="150">
                        <span>{{ $articulo->titulo }}</span></a>
                </div>
            @endforeach
        </div>




@endsection
