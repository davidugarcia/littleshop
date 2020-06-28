<?php if (isset($categoria)): ?>
   <h5 class="titulo espacio1 text-center"><?= $categoria->nombre ?></h5>
<?php if ($productos->num_rows == 0): ?>
	<p>No hay productos para mostrar</p>
<?php else: ?>
   
   <div class="card-group">
      <?php while($product = $productos->fetch_object()): ?>
         <div class="producto mr-2">
            <a href="">
               <?php if($product->imagen != null): ?>
                  <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" style="" class="card-img-top" alt="">
               <?php else: ?>
                  <img src="<?=base_url?>assets/img/camiseta.png"/>
               <?php endif; ?> 
            </a>        
            <div class="card-body">
               <h5 class="card-title"><?=$product->nombre?></h5>
               <p class="card-text"><?=$product->precio?></p>
               <a href="#" class="btn btn-outline-primary">Comprar</a>
            </div>
         </div>
      <?php endwhile; ?>
   </div>

<?php endif; ?>
   
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>
