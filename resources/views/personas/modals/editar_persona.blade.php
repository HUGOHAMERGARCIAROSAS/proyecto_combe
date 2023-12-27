@foreach ($personas as $key=>$item)
<div class="modal fade" id="editarPersona{{$item->persona_ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR PERSONA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('personas.update',$item->persona_ID)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="">Paterno:</label>
                            <input type="text" class="form-control" name="paterno" value="{{$item->paterno}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Materno:</label>
                            <input type="text" class="form-control" name="materno" value="{{$item->materno}}" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="">Nombres:</label>
                            <input type="text" class="form-control" name="nombres" value="{{$item->nombre}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" value="{{date('Y-m-d', strtotime($item->fecha_nacimiento))}}" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="">Tipo Persona:</label>
                            <select name="tipo_persona" class="form-control" required>
                                <option value="0" {{ 0 == $item->tipo_persona ? "selected" : "" }}>Seleccione una opción</option>
                                <option value="1" {{ 1 == $item->tipo_persona ? "selected" : "" }}>Persona Natural</option>
                                <option value="2" {{ 2 == $item->tipo_persona ? "selected" : "" }}>Persona Juridica</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Sexo:</label>
                            <select name="sexo" class="form-control" required>
                                <option value="0" {{ 0 == $item->sexo ? "selected" : "" }}>Seleccione una opción</option>
                                <option value="1" {{ 1 == $item->sexo ? "selected" : "" }}>Masculino</option>
                                <option value="2" {{ 2 == $item->sexo ? "selected" : "" }}>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="">Tipo Documento:</label>
                            <select name="tipo_documento" class="form-control" required>
                                <option value="0" {{ 0 == $item->tipo_documento ? "selected" : "" }}>Seleccione una opción</option>
                                <option value="1" {{ 1 == $item->tipo_documento ? "selected" : "" }}>DNI</option>
                                <option value="2" {{ 2 == $item->tipo_documento ? "selected" : "" }}>RUC</option>
                                <option value="3" {{ 3 == $item->tipo_documento ? "selected" : "" }}>Carnet de Extranjería</option>
                                <option value="4" {{ 4 == $item->tipo_documento ? "selected" : "" }}>Pasaporte</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Documento:</label>
                            <input type="text" class="form-control" name="documento" required value="{{$item->documento}}">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="">Celular:</label>
                            <input type="text" class="form-control" name="celular" required value="{{$item->celular}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" name="email" required value="{{$item->email}}">
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
