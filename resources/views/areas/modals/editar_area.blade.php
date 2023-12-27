@foreach ($areas as $key=>$item)
<div class="modal fade" id="editarArea{{$item->are_codigo}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR PERSONA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('areas.update',$item->are_codigo)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-9">
                            <label for="">Área:</label>
                            <input type="text" class="form-control" name="descripcion" value="{{$item->are_descripcion}}" required>
                        </div>
                        <div class="col-md-3">
                            <label for="">Abreviatura:</label>
                            <input type="text" class="form-control" name="abreviatura" value="{{$item->are_abreviatura}}" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="">Correo:</label>
                            <input type="text" class="form-control" name="correo"   value="{{$item->correo}}" required>
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
@endforeach
