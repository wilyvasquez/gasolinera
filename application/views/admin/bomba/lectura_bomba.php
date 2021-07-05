<div class="row">
  <div class="col-md-12">
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-2">
        <button type="button" class="btn btn-primary pull-left" id="nuevo_turno" style="width:100px;height: 30px;padding: 0px;">Nuevo turno</button>
      </div>
      <div class="col-md-2">
        <select class="form-control select2 col-md-2" id="bomba" data-placeholder="Bomba de gasolina" onchange="getDatosBomba()">
          <option value=""></option>
          <?php if (!empty($bomba)) {
            foreach ($bomba ->result() as $dato) { ?>
            <option value="<?= $dato->id_bomba ?>"><?= $dato->bomba ?></option>
          <?php } } ?>
        </select>        
      </div>
    </div>
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Lectura bomba</h3>
      </div>
      <div class="box-body table-responsive no-padding" id="tablaLectura">
        <table class="table table-hover">
          <tr style="background: #4C9DBD; color: white">
            <th>Dispensario</th>
            <th>Gasolina</th>
            <th>Numero</th>
            <th>Lectura inicial</th>
            <th>Lectura final</th>
            <th>Litros (Lts)</th>
            <th>Precio ($)</th>
            <th>Importe ($)</th>
            <th>Editar</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="agregarTurno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4C9DBD; color: white">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Generar turno</h4>
      </div>
      <form action="" id="agregarNuevoTurno">
        <div class="modal-body">
          <div class="form-group">
            <label for="articulo">Usuario :</label>
            <input type="text" class="form-control" name="articulo" placeholder="articulo">
          </div>
          <div class="form-group">
            <label for="articulo">Turno :</label>
            <input type="text" class="form-control" name="articulo" placeholder="articulo">
          </div>
          <div class="form-group">
            <label for="articulo">Bomba :</label>
            <input type="text" class="form-control" name="articulo" placeholder="articulo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary pull-right">Generar</button>
        </div>        
      </form>
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