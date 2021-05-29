@extends ('layouts.app')
@section('content')
<h1 class="text-center mt-3">Administrar artículos publicados</h1>
<a class="btn btn-success mr-1" href=" {{ route('articulos.create') }} ">Nuevo Artículo</a>


    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($articulos as $articulo)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ route('ruta.index') }}/storage/{{ $articulo->imagen }}" alt="Miniatura">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $articulo->titulo }}</h5>
                                <!-- Product price-->
                                <!-- $40.00 - $80.00-->
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-success mr-1" href="{{ route('articulos.show', ['articulo'=> $articulo->id]) }}">Ver artículo</a></div>
                            <div class="text-center"><a href="{{ route('articulos.edit', ['articulo'=> $articulo->id]) }}" class="btn btn-dark mr-1">Editar</a></div>

                            <div class="text-center">
                                <form method="POST" action="{{ route('articulos.destroy', ['articulo'=> $articulo->id]) }}">
                                @csrf
                                @method('DELETE')
                                <center><input type="submit" class="btn btn-danger w-20 d-block " value="Eliminar"></center>
                            </form>

                        </div>
                        </div>
                    </div>
                </div>
                @endforeach






            </div>
        </div>
    </section>




@endsection



