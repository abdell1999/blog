@extends ('layouts.app')

@section('content')

<h1 class="text-center mb-4">{{ $mensaje->titulo }}</h1>

<span class="font-weight-bold">Autor:
    {{ $mensaje->autor->name }}
</span>


<article class="my-3 col align-self-center">

{!! $mensaje->articulo !!}

</article>

@endsection
