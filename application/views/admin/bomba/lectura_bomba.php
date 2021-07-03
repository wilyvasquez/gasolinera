<div class="row">
  <div class="col-xs-12">
    <div class="row">
      <button type="button" class="btn btn-primary pull-left" id="nuevo_turno" style="width:100px;height: 30px;padding: 0px;margin-bottom: 10px;margin-left: 16px">Nuevo turno</button>
    </div>
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Lectura bomba</h3>
      </div>
      <div class="box-body table-responsive no-padding">
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
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
            <td>11-7-2014</td>
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