<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
<h4 class="text-center">Editar producto <?=$pro->nombre?></h4>
<?php $url_action = base_url."producto/guardarprod&id=".$pro->id; ?>
<?php else: ?>
<h4 class="text-center">Crear nuevo producto</h4>
<?php $url_action = base_url."producto/guardarprod"; ?>
<?php endif; ?>

<div class="d-flex flex-wrap justify-content-center">
   <form action="<?=$url_action?>" method="POST" class="was-validated" enctype="multipart/form-data" style="width:425px">

      <div class="form-row">

         <div class="col-md-6 mb-3">
            <label for="">Categoria</label>
            <?php $categorias = Utilidades::mostrarcat(); ?>
            <div class="input-group">
               <select name="categoria" class="custom-select" id="">
                  <!--la variables $categorias proviene del archivo categoriasController.php y el metodo index-->
                  <?php while ($cat = $categorias->fetch_object()): ?>
                  <option value="<?=$cat->id?>"
                     <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
                     <?=$cat->nombre?></option>
                  <?php endwhile; ?>
               </select>
            </div>
         </div>

         <div class="col-md-6 mb-3">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" id=""
               value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" placeholder="Producto" required>
         </div>

      </div>

      <div class="form-row">

         <div class="col-md-8 mb-3">
            <label for="">Descripcion</label>
            <textarea name="descripcion" class="form-control is-invalid" id="validationTextarea"
            style="word-wrap: break-word" placeholder="descripcion del producto"
               required><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
         </div>

      </div>

      <div class="form-row">

         <div class="col-md-6 mb-3">
            <label for="">Precio</label>
            <input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"
               class="form-control" id="" placeholder="" required>
         </div>

         <div class="col-md-6 mb-3">
            <label for="">Stock</label>
            <input type="text" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"
               class="form-control" id="" placeholder="Cantidad" required>
         </div>


      </div>

      <div class="form-row">

         <div class="col-md-6 mb-3">
            <div class="custom-file">
               <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
               <div class="card" style="width: 13rem;">
                  <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="card-img-top" alt="">
                  <div class="card-body">
                     <h5 class="card-text"><?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?></h5>
                  </div>
               </div>
               <?php endif; ?>
               <input type="file" name="imagen" class="custom-file-input" id="customFile" >
               <label class="custom-file-label" for="customFile">Cargar imagen...</label>
            </div>
         </div>

      </div>

      <button class="btn btn-primary" type="submit">Crear</button>

   </form>
</div>