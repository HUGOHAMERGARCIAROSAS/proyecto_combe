<div class="modal fade" id="registerProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR PROVEEDOR</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('proveedores.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Nombres:</label>
                        <select name="persona_ID" id="" class="form-control">
                            <option value="0">Seleccione Persona</option>
                            @foreach ($personas as $item)
                                <option value="{{$item->persona_ID}}">{{$item->nombres}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Razón Social:</label>
                        <input type="text" class="form-control" name="razon_social" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">RUC:</label>
                        <input type="text" class="form-control"  name="ruc" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Télefono:</label>
                        <input type="text" class="form-control" name="telefono" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Dirección:</label>
                        <input type="text" class="form-control" name="direccion" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Email Proveedor:</label>
                        <input type="email" class="form-control" name="email" required>
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