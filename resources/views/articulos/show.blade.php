@extends ('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">

            <article>

                <header class="mb-4">

                    @if ($propietario)

                <div class="btn-group"><a href="{{ route('articulos.edit', ['articulo'=> $articulo->id]) }}" class="btn btn-dark mr-1">Editar</a>
                    <form method="POST" action="{{ route('articulos.destroy', ['articulo'=> $articulo->id]) }}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-danger w-20 d-block " value="Eliminar">

                  </form></div>


                @endif

                    <h1 class="fw-bolder mb-1">{{ $articulo->titulo }}</h1>

                    <div class="text-muted fst-italic mb-2">Publicado {{ $articulo->created_at}} por <a href="#">{{ $articulo->autor->name }}</a></div>

                    @foreach ($categorias as $categoria)
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$categoria->nombre}}</a>
                    @endforeach

                </header>

                <figure class="mb-4"><img class="img-fluid rounded" src="{{ route('ruta.index') }}/storage/{{ $articulo->imagen }}" alt="Miniatura"></figure>
                <section class="mb-5">
                    {!! $articulo->contenido !!}
                </section>
            </article>
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="POST" action="{{ route('comentarios.store') }}" novalidate class="mb-4">
                            @csrf
                            <textarea class="form-control" rows="3" name="contenido" placeholder="Deja un comentario!!!"></textarea>
                            <input type="hidden" name="articuloComentado" value="{{ $articulo->id }}">
                            <input type="submit" class="btn btn-primary" value="Comentar" >

                        </form>
                        @foreach ($comentarios as $comentario)


                        <div class="d-flex mb-4">

                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                            <div class="ms-3">
                                <div class="fw-bold">

                                    @foreach ($usuarios as $usuario )

                                        @if ($comentario->user_id===$usuario->id)
                                            {{ $usuario->name }}
                                        @endif

                                    @endforeach




                                </div>
                                {{ $comentario->contenido }}

                            </div>
                        </div>
                        @endforeach
            </section>
        </div>

        <div class="col-lg-4">



            <div class="card mb-4">
                <div class="card-header">Sobre el autor</div>
                <div class="card-body">
                    <p>FOTO</p>
                    {{ $usuario1->name }}
                    {{ $usuario1->about }}
                    <p>LINK AL PERFIL</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
