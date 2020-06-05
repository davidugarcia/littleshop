<div class="col-lg-8 d-flex flex-wrap justify-content-center">

   <header>
      <div class="text-center">
         <h1 class="titulo espacio1">Registrarse</h1>
      </div>
   </header>

   <form action="index.php?controller=user&action=guardar_registro" method="POST" style="width:400px;">
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

  

</div>