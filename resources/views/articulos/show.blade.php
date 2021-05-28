@extends ('layouts.app')

@section('content')

<h1 class="text-center mb-4">{{ $articulo->titulo }}</h1>

<span class="font-weight-bold">Autor:
    {{ $articulo->autor->name }}
</span>


<article class="my-3 col align-self-center">

{!! $articulo->contenido !!}

</article>

@endsection
