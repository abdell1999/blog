@extends ('layouts.app')

@section('content')
<h1>Articulos</h1>

<a href=" {{ route('articulos.create') }} ">Nuevo Articulo</a>

<h2>Administrar artículos publicados</h2>
<div class="col-md10 mx-auto bg-white p-3">
    <table class="table">
        <thead>
            <tr>
                <th scole="col">Titulo</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>


        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td> {{$articulo->titulo}} </td>
                <td>
                    <form method="POST" action="{{ route('articulos.destroy', ['articulo'=> $articulo->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-20 d-block" value="Eliminar">
                    </form>

                    <a href="{{ route('articulos.edit', ['articulo'=> $articulo->id]) }}" class="btn btn-dark mr-1">Editar</a>
                    <br>
                    <a href="{{ route('articulos.show', ['articulo'=> $articulo->id]) }}" class="btn btn-success mr-1">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>

</div>


@endsection
