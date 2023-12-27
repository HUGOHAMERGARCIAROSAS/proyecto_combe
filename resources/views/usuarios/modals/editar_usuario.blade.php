@foreach ($usuarios as $key=>$item)
<div class="modal fade" id="editarUsuario{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('usuarios.update',$item->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" required value="{{$item->email}}">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Persona:</label>
                        <select class="form-control" name="persona_id" required>
                            <option value="0">Seleccione una persona</option>
                            @foreach ($personas as $x)
                                <option value="{{$x->persona_ID}}" {{ $x->persona_ID == $item->id ? "selected" : "" }}>{{$x->nombres}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Área:</label>
                        <select class="form-control" name="area_id" required>
                            <option value="0">Seleccione una área</option>
                            @foreach ($areas as $x)
                                <option value="{{$x->are_codigo}}" {{ $x->are_codigo == $item->area_id ? "selected" : "" }}>{{$x->are_descripcion}}</option>
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
@endforeach
