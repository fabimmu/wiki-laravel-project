<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar role de usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('roles.store') }}">
                        @csrf

                        <div class="mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input type="text" name="name" class="form-control" id="name"  placeholder="name" required>
</div>



<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Guardar cambios</button>
</div>
                    </form>
      </div>

    </div>
  </div>
</div>