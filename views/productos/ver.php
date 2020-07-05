<!--el objeto product proviene del controlador producto, metodo ver-->
   <div class="d-flex justify-content-center">
      <?php if (isset($product)): ?>
      <div class="card mb-3" style="max-width: 570px;">
            <div class="row no-gutters">
               <?php if ($product->imagen != null): ?>
                  <div class="col-md-5">
                     <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" class="card-img" alt="">
                  </div>
               <?php else: ?>
                  <div class="col-md-4">
                     <img src="<?= base_url ?>assets/img/camiseta.png" class="card-img" alt="">
                  </div>
               <?php endif; ?>
                  <div class="col-md-7">
                     <div class="card-body">
                        <h5 class="card-title"><?= $product->nombre ?></h5>
                        <p class="card-text"><?= $product->descripcion ?></p>
                        <p class="card-text">$<?= $product->precio ?></p>
                        <p class="card-text"><small class="text-muted"><?= $product->fecha ?></small></p>
                        <!--carrito-->
                        <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="btn btn-outline-primary">Comprar</a>
                        <a href="<?=base_url?>" class="btn btn-outline-warning">Ir a productos</a>
                        <a href="<?=base_url?>carrito/index" class="btn btn-outline-warning">Volver</a>
                     </div>
                  </div>
            </div>
         </div>
      <?php else: ?>
         <h1>El producto no existe</h1>
      <?php endif; ?>
   </div>

