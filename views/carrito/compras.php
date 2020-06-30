<h5>Carrito de compra</h5>

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>

   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Unidades</th>
            <th scope="col">Eliminar</th>
         </tr>
      </thead>

      <?php 
         //variable $carrito proviene del metodo index del controlador carrito
		   foreach($carrito as $indice => $valor): 
		   $producto = $valor['producto'];
	   ?>

      <tbody>
         <tr>
            <th style="width:200px">
               <?php if ($producto->imagen != null): ?>
                  <img src="<?=base_url?>uploads/images/<?= $producto->imagen ?>" class="img-thumbnail" alt="Responsive image">
               <?php else: ?>
                     <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
               <?php endif; ?>
            </th>
            <td scope="row">
               <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
            </td>
            <td><?=$producto->precio?></td>
            <td scope="row">
               <?=$valor['unidades']?>
               <div class="btn-group-vertical btn-group-sm">
                  <!--la variable $indice representa la cantida de producto que hay el arreglo empieza desde 0-->
                  <a href="<?=base_url?>carrito/up&index=<?=$indice?>" type="button" class="btn btn-warning">+</a>
                  <a href="<?=base_url?>carrito/down&index=<?=$indice?>" type="button" class="btn btn-danger">-</a>
               </div>
            </td>
            <td>
               <a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="button button-carrito button-red">Eliminar producto</a>
            </td>
         </tr>
      </tbody>
      <?php endforeach; ?>
   </table>

<br/>
<div class="">
   <a href="<?=base_url?>carrito/delete_all" type="button" class="btn btn-outline-dark">Vaciar carrito</a>
</div>

<?php else: ?>
	<p>El carrito está vacio, añade algun producto</p>
<?php endif; ?>