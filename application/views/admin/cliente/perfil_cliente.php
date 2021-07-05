<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Pago / Compras</h3>
      </div>
      <form role="form" id="agregarCompra">
        <div class="box-body">
          <div class="form-group">
            <label for="tipo">Tipo: </label>
            <select class="form-control" name="tipo"> 
              <option>Pago</option>
              <option>Compra</option>
            </select>
          </div>
          <div class="form-group">
            <label for="costo">Costo: </label>
            <input type="text" class="form-control" step="any" name="costo" placeholder="Costo">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion: </label>
            <textarea class="form-control" rows="3" name="descripcion" placeholder="Descripcion..."></textarea>
          </div>
          <div class="form-group" id="msg_abono"></div>
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
        <h3 class="box-title">Registros</h3>
      </div>
      <div class="box-body">
        <table id="tbl_abono" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
            <tr style="background: #4C9DBD; color: white">
              <th>Tipo</th>
              <th>Costo</th>
              <th>Fecha</th>
              <th>Descripcion</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>