<div class="modal fade" id="registerProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR PRODUCTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('productos.store')}}" method="POST">
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
                        <label for="">Código:</label>
                        <input type="text" class="form-control"  name="codigo" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Unidad Medida:</label>
                        <select  id="" class="form-control" name="id_unidad_medida">
                            @foreach ($unidades as $itemu)
                                <option value="{{$itemu->id_unidad_medida}}">{{$itemu->descripcion}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Categoría:</label>
                        <select  id="" class="form-control" name="id_categoria">
                            @foreach ($categorias as $itemc)
                                <option value="{{$itemc->id_categoria}}">{{$itemc->descripcion}}</option>
                            @endforeach
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