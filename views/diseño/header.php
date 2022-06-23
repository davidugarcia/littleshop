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
               <h1 class="header_titulo">Shop Shirts</h1>
            </a>
         </div>

         <ul class="header_btn nav">
               <li class="nav-item">    
                  <!--link redirecciona a una vista con el classs usuario y metodo registro en el archivo usuarioController.php-->
                  <a href="<?=base_url?>usuario/cuenta" type="button" class="btn btn-outline-info">Inicia sesion</a>
               </li>

               <li class="nav-item">    
                  <!--link redirecciona a una vista con el classs usuario y metodo registro en el archivo usuarioController.php-->
                  <a href="<?=base_url?>usuario/registro" type="button" class="btn btn-dark">Registrate</a>
               </li>
           </ul>
      </header>
         
      <!--nav-->
      <ul class="header_nav nav justify-content-center">
         <?php $categorias =  Utilidades::mostrarcat(); ?>
         <?php while($cat = $categorias->fetch_object()): ?>
         <li class="nav-item header_link">    
            <a class="nav-link" href="<?=base_url?>categorias/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
         </li>
         <?php endwhile; ?>
      </ul>

   <div class="container-fluid">
      <div class="row">