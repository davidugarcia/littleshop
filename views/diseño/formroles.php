<!--menu principal-->
<div class="col-lg-4">

   <?php if(!isset($_SESSION['identity'])): ?>
      <div class="texto">
         <h3 class="login">Loging</h3>
      </div>
      <form action="<?=base_url?>usuario/ingresar" method="POST" class="espacio">
         <div class="form-group">
            <div class="col-lg-12 mb-3">
               <label for="user">Correo</label>
               <input type="email" class="form-control is-valid" name="email" value="" required />
            </div>
         </div>

         <div class="form-group">
            <div class="col-lg-12">
               <label for="pass">Contraseña</label>
               <input type="password" class="form-control is-valid" name="pass" value="" required />
            </div>
         </div>

         <button type="submit" class="btn btn-primary espacio">Ingresar</button>
      </form>
   <?php else: ?>
      <h3 class ="text-center"><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
   <?php endif; ?>

   <div class="row d-flex justify-content-center">
      <?php if(isset($_SESSION['admin'])): ?>
         <div class="link_aside">
            <ul class="fa-ul">
               <li><a href="<?=base_url?>producto/gestionproduct"><span class="fa-li"><i class="fas fa-user-circle"></i></span>Gestionar productos</a></li>
               <li><a href="<?=base_url?>categorias/crearcat"><span class="fa-li"><i class="fas fa-id-badge"></i></span>Gestionar categorias</a></li>
               <li><a href="<?=base_url?>"><span class="fa-li"><i class="fas fa-user-cog"></i></span>Gestionar Pedidos</a>
               </li>
               <?php endif; ?>

               <?php if(isset($_SESSION['identity'])): ?>
               <li><a href="<?=base_url?>"><span class="fa-li"><i class="fas fa-user-circle"></i></span>Mis pedidos</a></li>
               <li><a href="<?=base_url?>usuario/cerrarsesion">cerrar sesion</a></li>
            </ul> 
         </div>
      <?php else: ?>
         <!--link redirecciona a una vista con el classs usuario y metodo registro en el archivo usuarioController.php-->
         <a href="<?=base_url?>usuario/registro" type="button" class="btn btn-outline-success">Registrate aqui</a>  
      <?php endif; ?>
   </div>

</div>

<!--pedidos y articulos-->
<div class="col-lg-8">