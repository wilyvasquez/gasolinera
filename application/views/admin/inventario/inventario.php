<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta articulo</h3>
      </div>
      <form role="form" id="agregarArticulo">
        <div class="box-body">
          <div class="form-group">
            <label for="articulo">Articulo :</label>
            <input type="text" class="form-control" name="articulo" placeholder="articulo">
          </div>
          <div class="form-group">
            <label for="clave">Clave :</label>
            <input type="text" class="form-control" name="clave" placeholder="Clave">
          </div>
          <div class="form-group">
            <label for="cantidad">Cantidad :</label>
            <input type="number" class="form-control" name="cantidad" placeholder="Cantidad">
          </div>
          <div class="form-group">
            <label for="costo">Costo :</label>
            <input type="number" class="form-control" step="any" name="costo" placeholder="Costo">
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="linea">Linea :</label>
              <input type="text" class="form-control" name="linea" placeholder="Linea">
            </div>
            <div class="form-group col-md-6">
              <label for="grupo">Grupo :</label>
              <input type="text" class="form-control" name="grupo" placeholder="Grupo">
            </div>            
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion :</label>
            <textarea class="form-control" rows="3" name="descripcion" placeholder="descripcion"></textarea>
          </div>
          <div class="form-group" id="msg_inventario"></div>
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