<h5>Mis pedidos</h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nº Pedido</th>
      <th scope="col">Coste</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
	      while ($pedidos = $mispedidos->fetch_object()):
		?>
      <th scope="row"><a href="<?= base_url ?>pedido/detalle&id=<?= $pedidos->id ?>"><?= $pedidos->id ?></a></th>
      <td>$<?= $pedidos->coste ?></td>
      <td><?= $pedidos->fecha ?></td>
      <?php endwhile; ?>
    </tr>
  </tbody>
</table>
