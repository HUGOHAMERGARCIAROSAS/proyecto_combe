<div class="modal fade" id="registerCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR CATEGORIA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('categorias.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Abrev:</label>
                        <input type="text" class="form-control"  name="abrev" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Tipo:</label>
                        <select name="tipo" id="" class="form-control">
                            <option value="1">PRODUCTO</option>
                            <option value="2">SERVICIO</option>
                        </select>
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