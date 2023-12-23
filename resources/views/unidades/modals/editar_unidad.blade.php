@foreach ($unidades as $key=>$item)
<div class="modal fade" id="editarUnidad{{$item->id_unidad_medida}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR UNIDAD DE MEDIDA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('unidades.update',$item->id_unidad_medida)}}" method="POST">
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
                    <div class="col-md-12">
                        <label for="">Abreviatura:</label>
                        <input type="text" class="form-control" name="abrev" value="{{$item->abrev}}" autocomplete="off">
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
