<h1 class="text-center pb-">Gestionar Productos</h1>

<article class="text-center py-1">
   <a href="<?=base_url?>producto/crearproducto" type="button" class="btn btn-outline-dark">
      Crear productos
   </a>
</article>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
	<div class="alert alert-info text-center" role="alert">El producto se ha creado correctamente</div>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>	
	<div class="alert alert-danger" role="alert">El producto NO se ha creado correctamente</div>
<?php endif; ?>

<!--metodo para borrar la variable de session producto que se crea en el archivo productoController.php-->
<?php Utilidades::borrarSession("producto"); ?>
	
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<div class="alert alert-info" role="alert">El producto se ha borrado correctamente</div>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<div class="alert alert-danger" role="alert">El producto NO se ha borrado correctamente</div>
<?php endif; ?>

<div class="d-flex flex-wrap justify-content-center">
   <div class="col-lg-12">
      <table class="table table-hover table-dark">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">NOMBRE</th>
               <th scope="col">DRESCRIPCION</th>
               <th scope="col">PRECIO</th>
               <th scope="col">STOCK</th>
               <th scope="col">OFERTA</th>
            </tr>
         </thead>
         <!--la variables $productos proviene del archivo ProductoController y el metodo gestionproduct-->
         <?php while($product = $productos->fetch_object()): ?>
         <tbody>
            <tr>
               <th scope="row"><?=$product->id;?></th>
               <th scope="row"><?=$product->nombre;?></th>
               <th scope="row"><?=$product->descripcion;?></th>
               <th scope="row"><?=$product->precio;?></th>
               <th scope="row"><?=$product->stock;?></th>
               <th scope="row"><?=$product->oferta;?></th>
            </tr>
         </tbody>
         <?php endwhile; ?>
      </table>
   </div>
</div>