<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta personal</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Usuario</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Permisos</label>
            <select class="form-control">
              <option></option>
            </select>
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
        <table id="tbl_usuario" class="table table-bordered table-striped">
          <thead>
          <tr style="background: #4C9DBD; color: white">
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>TELEFONO</th>
            <th>PERMISO</th>
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