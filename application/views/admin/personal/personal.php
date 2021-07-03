<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta personal</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" placeholder="Telefono">
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-8">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Registros</h3>
      </div>
      <div class="box-body">
        <table id="tbl_personal" class="table table-bordered table-striped">
          <thead>
          <tr style="background: #4C9DBD; color: white">
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>TELEFONO</th>
            <th>ACCION</th>
          </tr>
          </thead>
          <tbody>            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>