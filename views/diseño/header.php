<!DOCTYPE html>
<html lang="es">

<head>

   <meta charset="UTF-8" />
   <title>Tienda</title>
   <link rel="stylesheet" href="<?=base_url?>isset/styles.css">

   <!--fontawesome-->
   <script defer src="https://use.fontawesome.com/releases/v5.8.0/js/all.js"
      integrity="sha384-ukiibbYjFS/1dhODSWD+PrZ6+CGCgf8VbyUH7bQQNUulL+2r59uGYToovytTf4Xm" crossorigin="anonymous">
   </script>
   <!--Boostraps-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   </script>

</head>

<body>

      <!--header-->
      <header class = "d-flex justify-content-around">
         <div>
            <a href="<?=base_url?>">
               <h1 class="header_titulo">Shirts Shop</h1>
            </a>
         </div>

         <!-- Button trigger modal -->
         <?php if(!isset($_SESSION['identity'])): ?>
            <ul class="nav header_btn">
               <li class="nav-item">    
                  <!-- link resgistrate -->
                  <a href="" type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenterregister">Registrate</a>
               </li> 

               <li class="nav-item">    
                  <!-- link inicio sesion -->
                  <a href="" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenterloging">Inicia sesion</a>
               </li>
            </ul>
         <?php else: ?>
            <!-- Opciones gestionar cuenta -->
            <div class="btn-group">
               <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Mi cuenta
               </button>

               <div class="dropdown-menu dropdown-menu-right">               
                  <div class="link_aside">
                     <ul class="fa-ul">
                        <?php if(isset($_SESSION['admin'])): ?>
                            <li><a href="<?=base_url?>producto/gestionproduct"><span class="fa-li"><i
                                              class="fas fa-user-circle"></i></span>Gestionar productos</a></li>
                           <li><a href="<?=base_url?>categorias/crearcat"><span class="fa-li"><i
                                                class="fas fa-id-badge"></i></span>Gestionar categorias</a></li>
                           <li><a href="<?=base_url?>pedidos/gestion"><span class="fa-li"><i 
                                              class="fas fa-user-cog"></i></span>Gestionar Pedidos</a></li>
                        <?php endif; ?>

                        <?php if(isset($_SESSION['identity'])): ?>   
                           <li><a href="<?=base_url?>pedidos/mis_pedidos"><span class="fa-li"><i class="fas fa-user-circle"></i></span>Mis pedidos</a></li>
                           <li><a href="<?=base_url?>usuario/cerrarsesion"><span class="fa-li"><i class="fas fa-times-circle"></i></span>cerrar sesion</a></li>
                        <?php endif; ?>  
                     </ul>
                  </div>    
               </div>
            </div>
          <?php endif; ?>
      </header>

      <!-- Modal Registrate-->
      <div class="modal fade" id="exampleModalCenterregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Registrate</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
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
      
                     <button type="submit" class="btn btn-primary">Registrarse</button>
                  
                  </form>
               </div>      
            </div>
         </div>
      </div>

       <!-- Modal Iniciar Sesion-->
       <div class="modal fade" id="exampleModalCenterloging" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Inicia Sesion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="<?=base_url?>usuario/ingresar" method="POST">

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

                     <button type="submit" class="btn btn-primary">Ingresar</button>
                  </form>
               </div>      
            </div>
         </div>
      </div>

      <!-- Nav Categorias-->
      <ul class="nav justify-content-center header_nav">
         <?php $categorias =  Utilidades::mostrarcat(); ?>
         <?php while($cat = $categorias->fetch_object()): ?>
         <li class="nav-item header_link">    
            <a class="nav-link" href="<?=base_url?>categorias/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
         </li>
         <?php endwhile; ?>
      </ul>

   <div class="container-fluid">
      <div class="row">