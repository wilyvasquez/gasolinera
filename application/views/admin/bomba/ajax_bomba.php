<table class="table table-hover">
      <tr style="background: #4C9DBD; color: white">
        <th>Dispensador</th>
        <th>Gasolina</th>
        <th>Numero</th>
        <th>Lectura inicial</th>
        <th>Lectura final</th>
        <th>Litros (Lts)</th>
        <th>Precio ($)</th>
        <th>Importe ($)</th>
        <th>Editar</th>
      </tr>
      <?php if (!empty($r)) {
      	foreach ($r ->result() as $dato) {
		$inicial = $dato->lectura_inicial;
		$final   = $dato->lectura_final;
		$litros  = $inicial - $final;
		$importe = round($litros * $dato->precio,2); ?>
	  <tr>
        <td><?= $dato->dispensador ?></td>
        <td><?= $dato->gasolina ?></td>
        <td><?= $dato->numero ?></td>
        <td><?= $dato->lectura_inicial ?></td>
        <td><?= $dato->lectura_final ?></td>
        <td><?= $litros ?> (Lts)</td>
        <td>$ <?= number_format($dato->precio,2) ?></td>
        <td>$ <?= number_format($importe,2) ?></td>
        <td><a href="#" class="btn btn-block btn-primary btn-xs" onclick="editarDispensador(<?php echo $inicial.','.$final.','.$dato->id_dispensador.','.$dato->id_bomba ?>)">Editar</a></td>
      </tr>
  	  <?php } } ?>
</table>