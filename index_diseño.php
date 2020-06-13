<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tienda</title>
   <link rel="stylesheet" href="isset/style.css">

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
            <a href="index.php">
               <h1 class="titulo">Tienda Online</h1>
            </a>
         </div>
      </header>

      <!--nav-->
      <div class="row">
         <div class="col-lg-12">
            <nav class="navbar navbar-light">
               <!--nav letras-->
               <div class="espacio nav">

                  <a class="nav-link active" href="#">Active</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>

               </div>

               <!--nav iconos-->
               <div class="nav">

                  <div class="bloquesdiv"> <a class="divbar-brand" href="#">
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

   </div>

   <!--aside-->
   <!--form y roles-->
   <div class="container">

      <div class="row">
        
         <div class="col-lg-4">

            <div class="texto">
               <h3 class="login">Loging</h3>
            </div>

            <!--form-->
            <form class="espacio" action="post">
               <div class="row">
                  <div class="col-lg-12 mb-3">
                     <label for="user">Usuario</label>
                     <input type="text" class="form-control is-valid" id="user" value="Eliexer" required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-12 ">
                     <label for="pass">Contraseña</label>
                     <input type="text" class="form-control is-valid" id="pass" value="davi@yahoo.es" required>
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
               </div>

               <button class="btn btn-primary espacio" type="submit">Enviar</button>

            </form>

            <!--roles y gestion-->
            <div class="row d-flex justify-content-center">
               <div class="link_aside">
                  <ul class="fa-ul">
                     <li><a href=""><span class="fa-li"><i class="fas fa-user-circle"></i></span>Mis pedidos</a></li>
                     <li><a href=""><span class="fa-li"><i class="fas fa-id-badge"></i></span>Gestionar categorias</a>
                     </li>
                     <li><a href=""><span class="fa-li"><i class="fas fa-user-cog"></i></span>Gestionar pedidos</a>
                     </li>
                  </ul>
               </div>
            </div>

         </div>

         <!--menu principal de objectos-->
         <div class="col-lg-8">

            <header>
               <div class="text-center">
                  <h1 class="titulo espacio1">Pedidos</h1>
               </div>
            </header>

            <div class="d-flex flex-wrap">

               <div class="card border border-success producto">
                  <img src="isset/camiseta.png" class="card-img-top div_img" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Camiseta</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <a href="#" class="btn btn-outline-primary">Comprar</a>
                  </div>
               </div>

               <div class="card border border-danger producto">
                  <img src="isset/camiseta.png" class="card-img-top div_img" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Camiseta</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <a href="#" class="btn btn-outline-primary">Comprar</a>
                  </div>
               </div>

               <div class="card border border-info producto">
                  <img src="isset/camiseta.png" class=" card-img-top div_img" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Camiseta</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                     <a href="#" class="btn btn-outline-primary">Comprar</a>
                  </div>
               </div>

               <article class="espacio articulos">
                  <p>hghfuhguifghufughsufjjhghdfbjhdfjghfdighidjgjdfigjrijgirjgiobfgjhdfjghjhgjfhnfjnjnfgdgfhgfshggyjyjyydjhefeuhudhfuhduvhufdhvuhfduhvufdhviuhfdjjhjfgjjjjjjjjjjhgjjfgjjjjhjhjdjybfjfdjvhjdfkhvjkhdfjkgdjfkgjkdfjkgndjkfnjkgfiu
                     eliexerrrrrrrrrrkjhjkfgjjhkjhjifjihojgfihjigfjfijoh
                     jfehfhuhfuhudhgfuirehjgfiurheuhgiurehjgihrugh
                     nnfuihguerhjguhejrughurehjujjhijgihjigfjjgihjijhijyt</p>
               </article>

            </div>

         </div>

      </div>

   </div>

   <!--footer-->
   <div class="container">
      <div class="row">
         <div class="col-lg-12 mb-2">
            <div class="d-flex justify-content-center">
               <h3 class="letra">
                  <i class="fas fa-laptop-code"></i><span>Desarrollado por Eliexer Garcia &copycopy</span> <i
                     class="fas fa-laptop-code"></i>
               </h3>
            </div>
         </div>
      </div>
   </div>


   <!--Boostraps JS-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
   </script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
   </script>

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
   </script>

</body>

</html>