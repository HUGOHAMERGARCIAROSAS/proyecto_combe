<div class="modal fade" id="registerUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('usuarios.store')}}" method="POST" autocomplete="off">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" required autocomplete="off">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <label for="">Persona:</label>
                        <select class="form-control" name="persona_id" required>
                            <option value="0">Seleccione una persona</option>
                            @foreach ($personas as $item)
                                <option value="{{$item->persona_ID}}">{{$item->nombres}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Contraseña:</label>
                        <input type="password" class="form-control"  name="password" required autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label for="">Área:</label>
                        <select class="form-control" name="area_id" required>
                            <option value="0">Seleccione una área</option>
                            @foreach ($areas as $item)
                                <option value="{{$item->are_codigo}}">{{$item->are_descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <div class="col-md-12">
                        <label for="">Rol:</label>
                        <option value="0">Seleccione un rol</option>
                        <select name="role_id" class='form-control'>
                            @foreach ($roles as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
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

