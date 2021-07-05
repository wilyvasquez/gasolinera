<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta usuario</h3>
      </div>
      <form role="form" id="agregarUsuarios">
        <div class="box-body">
          <div class="form-group">
            <label for="nombre">Nombre :</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos :</label>
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
          </div>
          <div class="form-group">
            <label for="telefono">Telefono :</label>
            <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
          </div>
          <div class="form-group">
            <label for="usuario">Usuario :</label>
            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña :</label>
            <input type="text" class="form-control" name="password" placeholder="Contraseña" required>
          </div>
          <div class="form-group">
            <label for="permisos">Permisos :</label>
            <select class="form-control" name="permisos">
              <option>Adminitrador</option>
              <option>Usuario</option>
            </select>
          </div>
          <div class="form-group" id="msg_usuario"></div>
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
        <table id="tbl_usuario" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
          <tr style="background: #4C9DBD; color: white">
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>TELEFONO</th>
            <th>USUARIO</th>
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