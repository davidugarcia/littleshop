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
               <!--Letras-->
               <div class="espacio nav">

                  <a class="nav-link active" href="#">Active</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>

               </div>

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