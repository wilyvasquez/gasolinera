<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta clientes</h3>
      </div>
      <form role="form" id="agregarCliente">
        <div class="box-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" placeholder="Telefono">
          </div>
          <div class="form-group">
            <label for="telefono">RFC</label>
            <input type="text" class="form-control" name="telefono" placeholder="RFC">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Direccion</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group" id="msg_cliente"></div>
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
        <table id="tbl_cliente" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
          <tr style="background: #4C9DBD; color: white">
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>TELEFONO</th>
            <th>RFC</th>
            <th>ACCION</th>
          </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>