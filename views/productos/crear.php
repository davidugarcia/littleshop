<h4>Inserta Producto</h4>

<form action="<?=base_url?>producto/guardarprod" method="POST" class="was-validated" enctype="multipart/form-data">

   <div class="form-row">

      <div class="col-md-4 mb-3">
         <label for="">Categoria</label>
         <?php $categorias = Utilidades::mostrarcat(); ?>
         <div class="input-group">
            <select name="categoria" class="custom-select" id="">
               <?php while ($cat = $categorias->fetch_object()): ?>
               <option selected value="<?= $cat->id?>"><?=$cat->nombre?></option>
               <?php endwhile; ?>
            </select>
         </div>
      </div>

      <div class="col-md-4 mb-3">
         <label for="">Nombre</label>
         <input type="text" name="name" class="form-control" id="" value="" placeholder="Producto" required>
      </div>

   </div>

   <div class="form-row">

      <div class="col-md-8 mb-3">
         <label for="">Descripcion</label>
         <textarea name="descripcion" class="form-control is-invalid" id="validationTextarea" placeholder="descripcion del producto"
            required></textarea>
      </div>

   </div>

   <div class="form-row">

      <div class="col-md-4 mb-3">
         <label for="">Precio</label>
         <input type="text" name="precio" class="form-control" id="" placeholder="" required>
      </div>

      <div class="col-md-4 mb-3">
         <label for="">Stock</label>
         <input type="text" name="stock" class="form-control" id="" placeholder="Cantidad" required>
      </div>


   </div>

   <div class="form-row">

      <div class="col-md-8 mb-3">
         <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile">
            <label class="custom-file-label" for="validatedInputGroupCustomFile">Cargar imagen...</label>
         </div>
      </div>

   </div>


   <button class="btn btn-primary" type="submit">Crear</button>

</form>