<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta Turno</h3>
      </div>
      <form role="form" id="agregarTurno">
        <div class="box-body">
          <div class="form-group">
            <label for="nombre">Turno :</label>
            <select class="form-control" name="turno">
            	<option>Vespertino</option>
            	<option>Matutino</option>
            	<option>Nocturno</option>
            </select>
          </div>
          <div class="form-group">
            <label for="telefono">Entrada :</label>
            <input type="time" class="form-control" name="inicio" placeholder="Hora de inicio">
          </div>
          <div class="form-group">
            <label for="telefono">Salida :</label>
            <input type="time" class="form-control" name="final" placeholder="Hora de salida">
          </div>
          <div class="form-group" id="msg_turno"></div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary pull-right">Guardar</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Turno</h3>
      </div>
      <div class="box-body">
        <table id="tbl_turno" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
	          <tr style="background: #4C9DBD; color: white">
	            <th>Turno</th>
	            <th>Inicio</th>
	            <th>Final</th>
	            <th>Alta</th>
	            <th>Accion</th>
	          </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>