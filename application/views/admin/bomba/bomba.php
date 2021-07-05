<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta bombas</h3>
      </div>
      <form role="form" id="agregarBomba">
        <div class="box-body">
          <div class="form-group">
            <label for="bomba">Numero bomba :</label>
            <input type="text" class="form-control" name="bomba" placeholder="Numero de bomba" required>
          </div>
          <div class="form-group">
            <label for="dispensadores">N° Dispensadores :</label>
            <input type="text" class="form-control" name="dispensadores" placeholder="N° de Dispensadores" required>
          </div>
          <div class="form-group">
            <label for="tipos">Tipos de gasolina :</label>
            <select class="form-control select2" name="tipo[]" multiple required> 
              <option value="Magna">Magna</option>
              <option value="Premium">Premium</option>
              <option value="Diesel">Diesel</option>
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
        <table id="tbl_bomba" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
            <tr style="background: #4C9DBD; color: white">
              <th>Bomba</th>
              <th>Dispensadores</th>
              <th>Gasolina</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>