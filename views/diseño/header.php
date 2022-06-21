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
   <div class="container-fluid">

      <div class= "">
         <!--header-->
         <header>
            <div class="text-center">
               <a href="<?=base_url?>">
                  <h1 class="header_titulo">Shop Shirts Online</h1>
               </a>
            </div>
         </header>
         
         <!--nav-->
         <ul class="header_nav nav justify-content-center">
            <li class="nav-item header_link">
               <a class="nav-link active" href="<?=base_url?>">Inicio</a>
            </li>
            <?php $categorias =  Utilidades::mostrarcat(); ?>
            <?php while($cat = $categorias->fetch_object()): ?>
            <li class="nav-item header_link">    
               <a class="nav-link" href="<?=base_url?>categorias/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
            </li>
            <?php endwhile; ?>
         </ul>
      </div>

      <div class="row">