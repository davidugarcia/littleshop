<h1 class="titulo espacio1">Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
   <strong class="alert_green">Registro completado correctamente</strong>
   <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
   <strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>  

<form action="<?=base_url?>usuario/guardar" method="POST" style="width:400px;">

   <div class="form-group">
      <div class="col-lg-10 mb-3">
         <label for="user">Nombre</label>
         <input type="text" class="form-control is-valid" name="name" value="Eliexer" required>
         <div class="valid-feedback">
            Looks good!
         </div>
      </div>
   </div>

   <div class="form-group">
      <div class="col-lg-10 mb-3">
         <label for="user">Apellido</label>
         <input type="text" class="form-control is-valid" name="lname" value="Urbina" required>
         <div class="valid-feedback">
            Looks good!
         </div>
      </div>
   </div>

   <div class="form-group">
      <div class="col-lg-10 mb-3">
         <label for="inputEmail4">Correo</label>
         <input type="email" class="form-control is-valid" name="email" required>
      </div>
   </div>

   <div class="form-group">
      <div class="col-lg-10 ">
         <label for="pass">Contraseña</label>
         <input type="password" class="form-control is-valid" name="pass" value="" required>
         <div class="valid-feedback">
            Looks good!
         </div>
      </div>
   </div>

   <button type="submit" class="btn btn-primary espacio">Enviar</button>

</form>