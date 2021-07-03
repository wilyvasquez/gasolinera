<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta articulo</h3>
      </div>
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label for="articulo">Articulo</label>
            <input type="text" class="form-control" id="articulo" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="costo">Costo</label>
            <input type="text" class="form-control" id="costo" placeholder="Telefono">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" rows="3" placeholder="descripcion"></textarea>
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
        <table id="tbl_inventario" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
            <tr style="background: #4C9DBD; color: white">
              <th>ARTICULO</th>
              <th>CANTIDAD</th>
              <th>COSTO</th>
              <th>DESCRIPCION</th>
              <th>ACCION</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>