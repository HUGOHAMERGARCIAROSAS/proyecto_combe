<div class="modal fade" id="registerPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REGISTRAR PERSONA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('personas.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Paterno:</label>
                        <input type="text" class="form-control" name="paterno" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Materno:</label>
                        <input type="text" class="form-control" name="materno" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Nombres:</label>
                        <input type="text" class="form-control" name="nombres" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Tipo Persona:</label>
                        <select name="tipo_persona" class="form-control" required>
                            <option value="0">Seleccione una opción</option>
                            <option value="1">Persona Natural</option>
                            <option value="2">Persona Juridica</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Sexo:</label>
                        <select name="sexo" class="form-control" required>
                            <option value="0">Seleccione una opción</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Tipo Documento:</label>
                        <select name="tipo_documento" class="form-control" required>
                            <option value="0">Seleccione una opción</option>
                            <option value="1">DNI</option>
                            <option value="2">RUC</option>
                            <option value="3">Carnet de Extranjería</option>
                            <option value="4">Pasaporte</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Documento:</label>
                        <input type="text" class="form-control" name="documento" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="">Celular:</label>
                        <input type="text" class="form-control" name="celular" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Email:</label>
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