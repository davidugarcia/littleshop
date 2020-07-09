
<!--la variable $getpedido proviene del metodo detalles de la clase pedidos-->
<?php if(isset($getpedido)): ?>

   <?php if(isset($_SESSION['admin'])): ?>
			<h3>Cambiar estado del pedido</h3>
			<form action="<?=base_url?>pedidos/estado" method="POST">	
            <div class="form-group col-md-4">

               <input type="hidden" class="btn btn-primary" value="<?=$getpedido->id?>" name="pedido_id"/>

               <label for="inputState">ESTADO</label>

               <select name="estado" id="inputState" class="form-control">
                  <option value="confirm" <?=$getpedido->estado == "confirm" ? 'selected' : '';?>>Pendiente</option>
                  <option value="preparation" <?=$getpedido->estado == "preparation" ? 'selected' : '';?>>En preparación</option>
                  <option value="ready" <?=$getpedido->estado == "ready" ? 'selected' : '';?>>Preparado para enviar</option>
                  <option value="sended" <?=$getpedido->estado == "sended" ? 'selected' : '';?>>Enviado</option>
               </select>

            </div>

            <button type="submit" class="btn btn-primary">Cambiar estado</button>
			</form>
			<br/>
	<?php endif; ?>

   <h3>Detalle del pedido:</h3>

      <h5>Dirección de envio</h5>
      id: <?=$getpedido->id?>  <br/>
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

  