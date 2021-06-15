@extends ('layouts.app')
@section('content')
<div class="container">
<h1 class="text-center">Categorías</h1>

<br>
<a class="btn btn-success mt-4 w-100" href=" {{ route('categorias.create') }} ">Nueva categoría</a>
<div class="col-md10 mx-auto bg-white p-3">
    <table class="table">
        <thead>
            <tr>
                <th scole="col">Nombre</th>
                <th scole="col">Descripción</th>
                <th scole="col">Acciones</th>
            </tr>
        </thead>


        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td> {{$categoria->nombre}} </td>
                <td> {!!$categoria->descripcion!!} </td>
                <td>
                    <form method="POST" action="{{ route('categorias.destroy', ['categoria'=> $categoria->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger w-20 d-block" value="Eliminar">
                    </form>

                    <a href="{{ route('categorias.edit', ['categoria'=> $categoria->id]) }}" class="btn btn-dark mr-1">Editar</a>
                    <br>
                    <a href="{{ route('categorias.show', ['categoria'=> $categoria->id]) }}" class="btn btn-success mr-1">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>

</div>

</div>
@endsection



