

<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>

   <h5>Tu pedido se ha confirmado</h5>
	<p>
		Tu pedido ha sido guardado con exito, una vez que realices la transferencia
		bancaria a la cuenta 7382947289239ADD con el coste del pedido, será procesado y enviado.
	</p>
	<br/>

   <?php if (isset($pedido_user)): ?>

   	<h5>Datos del pedido:</h5>

		Número de pedido: <?= $pedido_user->id ?>   <br/>
		Total a pagar: $<?= $pedido_user->coste ?> <br/>
		Productos:

      <table class="table table-hover">
         <thead>
            <tr>
               <th scope="col">Imagen</th>
               <th scope="col">Nombre</th>
               <th scope="col">Precio</th>
               <th scope="col">Unidades</th>
            </tr>
         </thead>

         <tbody>
            <!--la variable $productos proviene del controlador pedidos metodo confirmado -->
            <?php while ($product = $productos->fetch_object()): ?>
               <tr>
                  <th style="width:200px">
                     <?php if ($product->imagen != null): ?>
                        <img src="<?=base_url?>uploads/images/<?= $product->imagen ?>" class="img-thumbnail" alt="Responsive image">
                     <?php else: ?>
                           <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
                     <?php endif; ?>
                  </th>
                  <td scope="row">
                     <a href="<?=base_url?>producto/ver&id=<?=$product->id?>"><?=$product->nombre?></a>
                  </td>
                  <td><?=$product->precio?></td>
                  <td><?= $product->unidades ?></td>
               </tr>
            <?php endwhile; ?>
         </tbody>
      </table>
   <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Tu pedido NO ha podido procesarse</strong>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
<?php endif; ?>