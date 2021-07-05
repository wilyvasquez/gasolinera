<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta gasolina</h3>
      </div>
      <form role="form" id="agregarGasolina">
        <div class="box-body">
          <div class="form-group">
            <label for="gasolina">Gasolina :</label>
            <select class="form-control" name="gasolina">
              <option>Magna</option>
              <option>Premium</option>
              <option>Dicel</option>
            </select>
          </div>
          <div class="form-group">
            <label for="precio">Precio :</label>
            <input type="number" class="form-control" name="precio" step="any" placeholder="Gasolina">
          </div>
          <div class="form-group">
            <label for="numero">Numero :</label>
            <input type="number" class="form-control" name="numero" placeholder="Numero">
          </div>
          <div class="form-group" id="msg_gasolina"></div>
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
        <h3 class="box-title">Gasolina</h3>
      </div>
      <div class="box-body">
        <table id="tbl_gasolina" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
            <tr style="background: #4C9DBD; color: white">
              <th>Gasolina</th>
              <th>Precio</th>
              <th>Numero</th>
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