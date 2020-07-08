

<?php if(isset($getpedido)): ?>

   <h3>Detalle del pedido:</h3>

      <h5>Dirección de envio</h5>

		Provincia: <?= $getpedido->provincia ?>   <br/>
		Cuidad: <?= $getpedido->localidad ?> <br/>
		Direccion: <?= $getpedido->direccion ?>   <br/><br/>

		<h3>Datos del pedido:</h3>
		Estado:
		Número de pedido: <?= $getpedido->id ?>   <br/>
		Total a pagar: $<?= $getpedido->coste ?> <br/>
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

  