<h5 class="titulo espacio1 text-center">Nuestros productos</h5>

   <div class="card-group">
      <?php while($product = $productos->fetch_object()): ?>
         <div class="producto">
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

   <!--
   <div class="d-flex flex-wrap justify-content-around">

   <div class="card border border-success producto">
      <img src="isset/camiseta.png" class="card-img-top div_img" alt="">
      <div class="card-body">
         <h5 class="card-title">Camiseta</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-outline-primary">Comprar</a>
      </div>
   </div>

   <div class="card border border-danger producto">
      <img src="isset/camiseta.png" class="card-img-top div_img" alt="...">
      <div class="card-body">
         <h5 class="card-title">Camiseta</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-outline-primary">Comprar</a>
      </div>
   </div>

   <div class="card border border-info producto">
      <img src="" class=" card-img-top div_img" alt="...">
      <div class="card-body">
         <h5 class="card-title">Camiseta</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-outline-primary">Comprar</a>
      </div>
   </div>-->
