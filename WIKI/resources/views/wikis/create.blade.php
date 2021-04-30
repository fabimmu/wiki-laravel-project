<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route("wikis.store")}}" method="POST" class="main-form needs-validation" novalidate>
          @csrf
          <div class="mb-3">
            <label for="titulo" class="form-label">Titulo Consulta</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo" required>
          </div>
          <div class="mb-3">
            <label for="motivo" class="form-label">Motivo</label>
            <textarea name="motivo" class="form-control" id="motivo" rows="3" placeholder="Motivo" required></textarea>
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">SUBMIT!</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>