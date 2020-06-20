<h5 class="titulo text-center">Registrarse</h5>

<div class="d-flex flex-column align-items-center">

   <div>
      <!--variables de sesion originadas en el archivo usuarioController en el metodo guardar-->
      <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
         <div class="alert alert-success" role="alert">Registro completado correctamente</div>
      <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
         <div class="alert alert-danger" role="alert">Registro fallido, introduce bien los datos</div>
      <?php endif; ?>
   </div>
   
   <!--borrar el alert creado al registrarse este metodo esta en el archivo de utility.php-->
   <?php Utilidades::borrarSession('register'); ?>

   <form action="<?=base_url?>usuario/guardar" method="POST" style="width:400px">

      <div class="form-row">
         <div class="form-group col-lg-6">
            <label for="user">Nombre</label>
            <input type="text" class="form-control is-valid" name="name" value="Eliexer" required>
         </div>
      
         <div class="form-group col-lg-6">
            <label for="user">Apellido</label>
            <input type="text" class="form-control is-valid" name="lname" value="Urbina" required>
         </div>
      </div>

      <div class="form-group">
         <div class="col-lg-12 mb-3">
            <label for="email">Correo</label>
            <input type="email" class="form-control is-valid" name="email" required>
         </div>
      </div>

      <div class="form-group">
         <div class="col-lg-12">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control is-valid" name="pass" value="" required>
         </div>
      </div>

      <button type="submit" class="btn btn-primary espacio">Registrarse</button>

   </form>

</div>