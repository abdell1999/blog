@extends ('layouts.app')
@section('content')

    <section class="py-5">
        <a class="btn btn-success d-flex justify-content-center" href=" {{ route('categorias.index') }} ">Categorias</a>

        <br>
        <br>

        <a class="btn btn-primary d-flex justify-content-center" href=" {{ route('articulos.create') }} ">Usuarios</a>

    </section>


@endsection



