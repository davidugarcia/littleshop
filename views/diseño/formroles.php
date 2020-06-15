<!--menu principal-->
<div class="col-lg-4">

   <div class="texto">
      <h3 class="login">Loging</h3>
   </div>

   <form action="<?=base_url?>usuario/ingresar" method="POST" class="espacio">

      <div class="form-group">
         <div class="col-lg-12 mb-3">
            <label for="user">Usuario</label>
            <input type="email" class="form-control is-valid" name="email" value="david@yahoo.es" required>
            <div class="valid-feedback">
               looks good!
            </div>
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

      <button type="submit" class="btn btn-primary espacio">Ingresar</button>

   </form>

   <!--roles gestionar-->
   <div class="row d-flex justify-content-center">
      <div class="link_aside">
         <ul class="fa-ul">
            <li><a href=""><span class="fa-li"><i class="fas fa-user-circle"></i></span>Mis pedidos</a></li>
            <li><a href=""><span class="fa-li"><i class="fas fa-id-badge"></i></span>Gestionar categorias</a>
            </li>
            <li><a href=""><span class="fa-li"><i class="fas fa-user-cog"></i></span>Gestionar pedidos</a></li>
         </ul>
      </div>
   </div>

</div>

<!--pedidos y articulos-->
<div class="col-lg-8">