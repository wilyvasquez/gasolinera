<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta dispensadores</h3>
      </div>
      <form role="form" id="agregarProveedor">
        <div class="box-body">
          <div class="form-group">
            <label for="nombre">Dispensador :</label>
            <select class="form-control"> 
              <option>1</option>
            </select>
          </div>
          <div class="form-group">
            <label for="telefono">Tipo gasolina :</label>
            <select class="form-control">
              <option>Magna</option>
              <option>Premium</option>
              <option>Diesel</option>
            </select>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="rfc">Lectura inicial :</label>
              <input type="text" class="form-control" name="rfc" placeholder="Lectura inicial">
            </div>
            <div class="form-group col-md-6">
              <label for="curp">Lectura Final :</label>
              <input type="text" class="form-control" name="curp" placeholder="Lectura Final">
            </div>            
          </div>
          <div class="form-group" id="msg_bomba"></div>
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
        <h3 class="box-title">Dispensadores</h3>
      </div>
      <div class="box-body">
        <table id="tbl_proveedor" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
          <tr style="background: #4C9DBD; color: white">
            <th>NOMBRE</th>
            <th>TELEFONO</th>
            <th>RFC</th>
            <th>CURP</th>
            <th>ACCION</th>
          </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>