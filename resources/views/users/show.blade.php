@extends ('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="{{ route('ruta.index') }}/storage/{{ $user->fotoPerfil }}" width="100" class="rounded-circle"> </div>
                <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">

                    @if ($user->rol == 'admin')
                        ADMINISTRADOR
                    @else
                        USUARIO NORMAL
                    @endif





                </span>
                    <h5 class="mt-2 mb-0">{{ $user->name }}</h5>
                    <div class="px-4 mt-1">
                        <p class="fonts">{{ $user->about }}</p>
                    </div>

                    <div class="buttons">
                        <a class="btn btn-outline-primary px-4" href="mailto:{{ $user->email }}">Enviar un mensaje</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
