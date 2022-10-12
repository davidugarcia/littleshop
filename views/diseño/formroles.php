<!--menu principal-->
<?php if(isset($_SESSION['identity'])): ?>

   <div class="col-lg-4">
         <h3 class="text-center letra"><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>

         <div class="texto">
            <h3 class="login">Carrito</h3>
         </div>
         <!--carrito-->
         <div class="d-flex justify-content-center">

            <ul class="list-group" style="width:175px">
               <!--proviene del archivo utility-->
               <?php $estatus = Utilidades::estatus_Carrito(); ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
               <a href="<?=base_url?>carrito/index">Productos</a>
                  <span class="badge badge-primary badge-pill"><?=$estatus['cuenta_products']?></span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
               <a href="<?=base_url?>carrito/index">Total:</a>
                  <span class="badge badge-primary badge-pill"><?=$estatus['total']?> </span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center">
               <a href="<?=base_url?>carrito/index">Ver el carrito</a>
               </li>
            </ul>

         </div>
   </div>
   
<?php endif; ?>

<!--productos y vistas para ajustes, pedidos y compra.-->
<?php if(isset($_SESSION['identity'])): ?>
   <div class="col-lg-8">
<?php else: ?>
   <div class="col-lg-12">
<?php endif; ?>
