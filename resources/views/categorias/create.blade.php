@extends ('layouts.app')


@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" defer integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>
@endsection


@section('content')
<h1>Crear una nueva categoria</h1>



<div class="col-md-8">
<form method="POST" action="{{ route('categorias.store') }}" novalidate>
  @csrf
  <div class="form-group">
    <label for="nombre">Nombre de la categoría</label>
    <input type="text" name="nombre" class="form-control @error('nombre')
        is-invalid
    @enderror" id="nombre" placeholder="Nombre de la categoria"
    value="{{ old('nombre') }}">

    @error('nombre')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>

    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <input id="descripcion" type="hidden" name="descripcion" value="{{ old('descripcion') }}">
        <trix-editor input="descripcion"></trix-editor>
        @error('descripcion')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>







  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Crear categoría">
  </div>


</form>
</div>






@endsection
