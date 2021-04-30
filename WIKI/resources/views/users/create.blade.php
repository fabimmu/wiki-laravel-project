<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('users.store') }}">
                        @csrf
<div class="mb-3">
<label for="role" class="form-label">Role</label>
<select name="role_id" class="form-select" aria-label="Default select example" required>
@foreach($roles as $role)
<option value="{{$role->id}}">{{$role->name}}</option>
@endforeach
</select>
</div>
                        <div class="mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input type="text" name="name" class="form-control" id="name"  placeholder="name" required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="email"  placeholder="email" required>
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="passwordemail"  placeholder="password" >
</div>


<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Guardar cambios</button>
</div>
                    </form>
      </div>

    </div>
  </div>
</div>