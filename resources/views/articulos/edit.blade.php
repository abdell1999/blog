@extends ('layouts.app')


@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" defer integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
@endsection


@section('content')
<h1>EDIT</h1>



<!-- //El action del form debe ser {{ route('articulos.store') }}

añadir tb @csrf...


le ponemos al form novalidate para validar con laravel

-->

<div class="col-md-8">
<form method="POST" action="{{ route('articulos.update',['articulo' => $articulo->id]) }}" enctype="multipart/form-data" novalidate>
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="titulo">Título del artículo</label>
    <input type="text" name="titulo" class="form-control @error('titulo')
        is-invalid
    @enderror" id="titulo" placeholder="Título del artículo"
    value="{{ $articulo->titulo }}">

    @error('titulo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

    <div class="form-group">
        <label for="contenido">Contenido:</label>
        <input id="contenido" type="hidden" name="contenido" value="{{ $articulo->contenido }}">
        <trix-editor input="contenido"></trix-editor>
        @error('contenido')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>





    <div class="form-group mt-3">
        <label for="imagen">Miniatura del artículo</label>
        <input type="file" class="form-control" name="imagen">
        @error('imagen')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    </div>

    <div class="mt-4">
        <p>Miniatura actual:</p>
        <img src="{{ route('ruta.index') }}/storage/{{ $articulo->imagen }}" alt="Miniatura" height="25%" width="25%">
    </div>


    </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Editar artículo" >
  </div>


</form>
</div>






@endsection
