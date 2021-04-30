@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-4 mx-auto">
<form action="{{ route("roles.update", $role)}}" method="POST" class="main-form needs-validation" novalidate>
      @csrf
      @method('PUT')
    <div class="mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input type="text" name="name" class="form-control" id="name" value="{{$role->name}}" placeholder="name" required>
</div>


<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Guardar cambios</button>
</div>
    </form>

</div>

</div>
@endsection