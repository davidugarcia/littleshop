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
   <div class="container">

      <!--header-->
      <header>
         <div class="text-center">
            <a href="">
               <h1 class="titulo">Tienda Online</h1>
            </a>
         </div>
      </header>

      <!--nav-->
      <div class="row">
         <div class="col-lg-12">
            <nav class="navbar navbar-light">

               <ul class="nav nav-pills">
                  <li class="nav-item">
                     <a class="nav-link active" href="#">Inicio</a>
                  </li>

                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Categorias</a>
                     <?php $categorias =  Utilidades::mostrarcat(); ?>
                     <div class="dropdown-menu">
                        <?php while($cat = $categorias->fetch_object()): ?>
                        <a class="dropdown-item" href="#"><?=$cat->nombre?></a>
                        <?php endwhile; ?>
                     </div>
                  </li>
               </ul>

                  <!--Letras-->

                  <!--Iconos de nav-->
                  <div class="nav">

                     <div class="bloquesdiv"><a class="divbar-brand" href="#">
                           <span class="icono"><i class="fas fa-robot"></i>ELIEZER</span></a>
                     </div>
                     <div class="bloquesdiv"><a href="" class="icono tooltipedu">
                           <i class="fab fa-github-alt"></i><span class="tooltiptextedu">cuenta</span></a>
                     </div>
                     <div class="bloquesdiv"><a href="" class="icono tooltipedu">
                           <i class="fab fa-whatsapp"></i><span class="tooltiptextedu">numero</span></a>
                     </div>
                     <div class="bloquesdiv"><a href="" class="icono tooltipedu">
                           <i class="fas fa-at"></i><span class="tooltiptextedu">correo</span></a>
                     </div>

                  </div>
            </nav>
         </div>
      </div>

      <div class="row">