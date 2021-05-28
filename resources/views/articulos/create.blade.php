@extends ('layouts.app')


@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" defer integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
@endsection


@section('content')
<h1>CREATE</h1>



<!-- //El action del form debe ser {{ route('mensajes.store') }}

añadir tb @csrf...


le ponemos al form novalidate para validar con laravel

-->

<div class="col-md-8">
<form method="POST" action="{{ route('mensajes.store') }}" novalidate>
  @csrf
  <div class="form-group">
    <label for="titulo">Título del artículo</label>
    <input type="text" name="titulo" class="form-control @error('titulo')
        is-invalid
    @enderror" id="titulo" placeholder="Título del artículo"
    value="{{ old('titulo') }}">

    @error('titulo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

    <div class="form-group">
        <label for="articulo">Artículo:</label>
        <input id="articulo" type="hidden" name="articulo" value="{{ old('articulo') }}">
        <trix-editor input="articulo"></trix-editor>
        @error('articulo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>



  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Añadir artículo">
  </div>


</form>
</div>






@endsection
