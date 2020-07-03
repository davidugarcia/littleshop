<?php if (isset($_SESSION['identity'])): ?>
	<h5>Realizar pedido</h5>
	<p>
		<a href="<?= base_url?>carrito/index">Ver productos y precio del pedido</a>
	</p>
	<br/>
	
	<h5>Dirección para el envio:</h5>

   <div class="d-flex flex-column align-items-center">
      <form action="<?=base_url.'pedidos/add'?>" method="POST" style="width:400px">

         <div class="form-row">
            <div class="form-group col-lg-6">
               <label for="user">Provincia</label>
               <input type="text" class="form-control is-valid" name="provincia" value="Provincia" required>
            </div>
         
            <div class="form-group col-lg-6">
               <label for="user">Ciudad</label>
               <input type="text" class="form-control is-valid" name="ciudad" value="Ciudad" required>
            </div>
         </div>

         <div class="form-group">
            <div class="col-lg-12 mb-3">
               <label for="direccion">Dirección</label>
               <input type="text" class="form-control is-valid" name="direccion" required>
            </div>
         </div>

         <button type="submit" class="btn btn-primary espacio">Confirmar pedido</button>

      </form>
   </div>
		
<?php else: ?>

   <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Necesitas estar identificado,</strong> Necesitas estar logueado en la web para poder realizar tu pedido.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>

<?php endif; ?>

