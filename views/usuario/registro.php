<h1 class="titulo text-center">Registrarse</h1>

<div class="d-flex flex-column align-items-center">

   <div>
      <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
      <div class="alert alert-success" role="alert">Registro completado correctamente</div>
      <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
      <div class="alert alert-danger" role="alert">Registro fallido, introduce bien los datos</div>
      <?php endif; ?>
      
   </div>

   <?php //trozo de codigo para borrar la sesion creada por register 
   Utilidades::borrarSession('register'); ?>

   <form action="<?=base_url?>usuario/guardar" method="POST" style="width:280px;">

      <div class="form-group">
         <div class="col-lg-12 mb-3">
            <label for="user">Nombre</label>
            <input type="text" class="form-control is-valid" name="name" value="Eliexer" required>
            <div class="valid-feedback">
               Looks good!
            </div>
         </div>
      </div>

      <div class="form-group">
         <div class="col-lg-12 mb-3">
            <label for="user">Apellido</label>
            <input type="text" class="form-control is-valid" name="lname" value="Urbina" required>
            <div class="valid-feedback">
               Looks good!
            </div>
         </div>
      </div>

      <div class="form-group">
         <div class="col-lg-12 mb-3">
            <label for="inputEmail4">Correo</label>
            <input type="email" class="form-control is-valid" name="email" required>
         </div>
      </div>

      <div class="form-group">
         <div class="col-lg-12 ">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control is-valid" name="pass" value="" required>
            <div class="valid-feedback">
               Looks good!
            </div>
         </div>
      </div>

      <button type="submit" class="btn btn-primary espacio">Registrarse</button>

   </form>

</div>