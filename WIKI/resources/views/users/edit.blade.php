@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 col-md-4 mx-auto">
<form action="{{ route("users.update", $user)}}" method="POST" class="main-form needs-validation" novalidate>
      @csrf
      @method('PUT')
      <div class="mb-3">
<label for="role" class="form-label">Role</label>
<select name="role_id" class="form-select" aria-label="Default select example" required>
@foreach($roles as $role)
@if($user->role_id == $role->id)
<option value="{{$role->id}}" selected>{{$role->name}}</option>
@else
<option value="{{$role->id}}">{{$role->name}}</option>
@endif
@endforeach
</select>
</div>

    <div class="mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}" placeholder="name" required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" placeholder="email" required>
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="passwordemail"  placeholder="password" >
</div>

<div class="form-check d-flex justify-content-end mb-4">
  <input name="changepassword" class="form-check-input me-2" type="checkbox" id="chnagepassword">
  <label class="form-check-label" for="defaultCheck1">
    Cambiar Contraseña
  </label>
</div>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Guardar cambios</button>
</div>
    </form>

</div>

</div>
@endsection