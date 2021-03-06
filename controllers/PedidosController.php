<?php

require_once 'modelo/pedidos.php';

class pedidosController
{

   public function realizar_pedido()
   {
      require_once 'views/pedidos/realizarped.php';
   }

   public function add()
   {

      if (isset($_SESSION['identity'])) {
         //esta variable de session es creada desde el controlador de usuarios en el metodo registrase
         $usuario_id = $_SESSION['identity']->id;

         //datos enviados por post desde el archivo realizarped.php
         $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
         $localidad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
         $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

         //metodo estatico del archivo utility.php que lleva cuenta de productos y el total
         $estado = Utilidades::estatus_Carrito();
         $coste = $estado['total'];

         if ($provincia && $localidad && $direccion){

            // Guardar datos en bd
            $pedido = new Pedidos();

            $pedido->setUsuario_id($usuario_id);

            $pedido->setProvincia($provincia);
            $pedido->setLocalidad($localidad);
            $pedido->setDireccion($direccion);
            $pedido->setCoste($coste);

            //regresa un true o false
            $save = $pedido->guardar();

            // Guardar linea pedido
            $save_linea = $pedido->guardar_linea();

            if ($save && $save_linea) {
               $_SESSION['pedido'] = "complete";
            } else {
               $_SESSION['pedido'] = "failed";
            }
         } else {
            $_SESSION['pedido'] = "failed";
         }

         //header("Location:".base_url.'pedido/confirmado');		
         echo '<script>window.location= "' . base_url . 'pedidos/confirmado"</script>';
      } else {
         // Redigir al index
         //header("Location:".base_url);
         echo '<script>window.location= "' . base_url . '"</script>';
      }
   }

   public function confirmado()
   {
      if (isset($_SESSION['identity'])) {

         $identity = $_SESSION['identity'];

         $pedido = new Pedidos();
         $pedido->setUsuario_id($identity->id);

         //el modelo regresa id y coste de la tabla pedidos limite = 1
         $pedido_user = $pedido->product_user();

         $pedido_productos = new Pedidos;
         $productos = $pedido_productos->getProductosbyPedido($pedido_user->id);
      }
      require_once 'views/pedidos/confirmado.php';
   }


   public function mis_pedidos()
   {

      Utilidades::isIdentity();
      $usuario_id = $_SESSION['identity']->id;
      $pedido = new Pedidos();

      $pedido->setUsuario_id($usuario_id);
      // Saca los pedidos del usuario cuando el usuario_id = al id de tabla de usuario
      $mispedidos = $pedido->gettodoUsuario();

      require_once 'views/pedidos/mis_pedidos.php';
   }

   //porviene del archivo mis_pedidos.php
   public function detalle()
   {
      Utilidades::isIdentity();

      if (isset($_GET['id'])) {

         $id = $_GET['id'];

         // Sacar el pedido
         $pedido = new Pedidos();
         $pedido->setId($id);
         //regresa todos los campos con los registros de la tabla pedidos
         $getpedido = $pedido->getunico();

         // Sacar los poductos
         $pedido_productos = new Pedidos();
         /*saca todo los datos de la tabla productos y el campo unidades dela 
         tabla lineas_pedidos atraves de id*/
         $productos = $pedido_productos->getProductosByPedido($id);
         require_once 'views/pedidos/detalle.php';
      } else {
         //header('Location:'.base_url.'pedido/mis_pedidos');
         echo '<script>window.location= "' . base_url . 'pedidos/mis_pedidos"</script>';
      }
   }

   public function gestion()
   {

      Utilidades::esAdministrador();
      $gestion = true;

      $pedido = new Pedidos();
      //saca todo los registros de la tabla pedidos de manera desc por id
      $mispedidos = $pedido->gettodo();

      require_once 'views/pedidos/mis_pedidos.php';
   }

   public function estado()
   {

      Utilidades::esAdministrador();
      if (isset($_POST['pedido_id']) && isset($_POST['estado'])) {
         // Recoger datos form
         $id = $_POST['pedido_id'];
         $estado = $_POST['estado'];

         // Upadate del pedido
         $pedido = new Pedidos();
         $pedido->setId($id);
         $pedido->setEstado($estado);
         //regresa true o false si actualiza el campo de estado de la tabla de pedidos
         $pedido->edit();

         //header("Location:".base_url.'pedido/detalle&id='.$id);
         //echo '<script> window.location= "'.base_url.'pedidos/detalle&id=$id"</script>';
         echo '<script>window.location="' . base_url . 'pedidos/detalle?id=' . $id . '";</script>';
      } else {
         //header("Location:".base_url);
         echo '<script>window.location= "' . base_url . '"</script>';
      }
   }
}