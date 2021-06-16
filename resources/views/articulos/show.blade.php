@extends ('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">

            <article>

                <header class="mb-4">

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
                        <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>

                        <div class="d-flex mb-4">

                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                            <div class="ms-3">
                                <div class="fw-bold">Commenter Name</div>
                                If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                    </div>
                                </div>

                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When you put money directly to a problem, it makes a good headline.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..."></div>
                            <div class="ms-3">
                                <div class="fw-bold">Commenter Name</div>
                                When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-4">



            <div class="card mb-4">
                <div class="card-header">Sobre el autor</div>
                <div class="card-body">
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAv
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAv
                    HOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLAHOLHOLA
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
