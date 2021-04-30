@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-4 mx-auto">
<form action="{{ route("wikis.update", $wiki)}}" method="POST" class="main-form needs-validation" novalidate>
      @csrf
      @method('PUT')
    <div class="mb-3">
  <label for="titulo" class="form-label">Titulo Consulta</label>
  <input type="text" name="titulo" class="form-control" id="titulo" value="{{$wiki->titulo}}" placeholder="titulo" required>
</div>
<div class="mb-3">
  <label for="motivo" class="form-label">Motivo</label>
  <textarea name="motivo" class="form-control" id="motivo" rows="3"  placeholder="Motivo" required>{{$wiki->motivo}}</textarea>
</div>
@if($wiki->estado == 1)
<div class="form-check d-flex justify-content-end mb-4">
  <input name="desabilitar" class="form-check-input me-2" type="checkbox" id="wiki">
  <label class="form-check-label" for="defaultCheck1">
    Desabilitar wiki
  </label>
</div>
@else
<div class="form-check d-flex justify-content-end mb-4">
  <input name="habilitar" class="form-check-input me-2" type="checkbox" id="wiki">
  <label class="form-check-label" for="defaultCheck1">
    Habilitar wiki
  </label>
</div>
@endif
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Guardar cambios</button>
</div>
    </form>

</div>

</div>
@endsection