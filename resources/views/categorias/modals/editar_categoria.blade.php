@foreach ($categorias as $key=>$item)
<div class="modal fade" id="editarCategoria{{$item->id_categoria}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR CATEGORÍA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('categorias.update',$item->id_categoria)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <style>
                    .row{
                        padding-top: 10px;
                    }
                </style>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" name="descripcion" value="{{$item->descripcion}}" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Abreviatura:</label>
                        <input type="text" class="form-control" name="abrev" value="{{$item->abrev}}" autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tipo:</label>
                        <select name="tipo" id="" class="form-control">
                            @if($item->tipo==1)
                                <option value="1">Producto</option>
                                <option value="2">Servicio</option>
                            @endif
                            @if($item->tipo==2)
                                <option value="2">Servicio</option>
                                <option value="1">Producto</option>
                            @endif
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
@endforeach
