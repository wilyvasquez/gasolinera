<div class="row">
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Alta dispensadores</h3>
      </div>
      <form role="form" id="agregarDispensador">
        <div class="box-body">
          <div class="form-group">
            <label for="nombre">Dispensador :</label>
            <select class="form-control" name="dispensador"> 
              <option>1</option>
            </select>
            <input type="hidden" class="form-control" name="id_bomba" id="id_bomba" value="<?= $id_bomba ?>" >
          </div>
          <div class="form-group">
            <label for="telefono">Tipo gasolina :</label>
            <select class="form-control" name="tipo">
              <?php if (!empty($gasolina)) {
                foreach ($gasolina ->result() as $dato) {?>
                <option value="<?= $dato->id_gasolina?>"><?= $dato->gasolina ?></option>
              <?php } } ?>
            </select>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="rfc">Lectura inicial :</label>
              <input type="text" class="form-control" name="lectura_inicial" placeholder="Lectura inicial">
            </div>
            <div class="form-group col-md-6">
              <label for="curp">Lectura Final :</label>
              <input type="text" class="form-control" name="lectura_final" placeholder="Lectura Final">
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
        <table id="tbl_dispensador" class="table table-bordered table-striped" style="width: 100%;">
          <thead>
          <tr style="background: #4C9DBD; color: white">
            <th>Dispensador</th>
            <th>Tipo</th>
            <th>L. Inicial</th>
            <th>L. Final</th>
            <th>Diferencia</th>
            <th>Accion</th>
          </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editarDispensador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4C9DBD; color: white">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar dispensador</h4>
      </div>
      <form action="" id="actualizarDispensador">
        <div class="modal-body">
          <div class="form-group">
            <label for="articulo">Gasolina :</label>
            <input type="text" class="form-control" id="mgasolina" placeholder="Gasolina" disabled>
            <input type="hidden" class="form-control" name="id_dispensador" id="id_dispensador">
            <input type="hidden" class="form-control" name="id_bomba" id="id_bomba">
          </div>
          <div class="form-group">
            <label for="articulo">Lectura inicial :</label>
            <input type="text" class="form-control" name="minicial" id="minicial" placeholder="Lectura inicial">
          </div>
          <div class="form-group">
            <label for="articulo">Lectura Final :</label>
            <input type="text" class="form-control" name="mfinal" id="mfinal" placeholder="Lectura Final">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary pull-right">Guardar</button>
        </div>        
      </form>
    </div>
  </div>
</div>