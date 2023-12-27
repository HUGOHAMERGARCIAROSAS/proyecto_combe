<div class="modal fade" id="registerArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR ÁREA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('areas.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-9">
                        <label for="">Área:</label>
                        <input type="text" class="form-control" name="descripcion" required>
                    </div>
                    <div class="col-md-3">
                        <label for="">Abreviatura:</label>
                        <input type="text" class="form-control" name="abreviatura" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Correo:</label>
                        <input type="text" class="form-control" name="correo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>