<form action="<?=base_url?>categorias/guardarcat" method="POST" class="was-validated">
   <div class="mb-3">
      <label for="name"> Nombre de Categoria</label>
      <input type="text" class="form-control is-valid" name="name" id="name" required>
   </div>

   <button class="btn btn-primary" type="submit">Guardar</button>
</form>