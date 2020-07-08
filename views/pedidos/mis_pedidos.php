<?php if (isset($gestion)): ?>
	<h5>Gestionar pedidos</h5>
<?php else: ?>
  <h5>Mis pedidos</h5>
<?php endif; ?>

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
      <?php while ($pedidos = $mispedidos->fetch_object()):?>
      <th scope="row"><a href="<?= base_url ?>pedidos/detalle&id=<?= $pedidos->id ?>"><?= $pedidos->id ?></a></th>
      <td>$<?= $pedidos->coste ?></td>
      <td><?= $pedidos->fecha ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
