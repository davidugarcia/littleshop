<?php

require_once 'modelo/pedidos.php';

class pedidosController{
      
   public function realizar_pedido(){

      require_once 'views/pedidos/realizarped.php';

   }

   public function add(){
         
         if(isset($_SESSION['identity'])){
            //esta variable de session es creada desde el controlador de usuarios en el metodo registrase
            $usuario_id = $_SESSION['identity']->id;

            //datos enviados por post desde el archivo realizarped.php
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            
            //metodo estatico del archivo utility.php que lleva cuenta de productos y el total
            $estado = Utilidades::estatus_Carrito();
            $coste = $estado['total'];
               
            if($provincia && $localidad && $direccion){

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
               
               if($save && $save_linea){

                  $_SESSION['pedido'] = "complete";

               }else{
                  
                  $_SESSION['pedido'] = "failed";

               }
               
            }else{
               $_SESSION['pedido'] = "failed";
            }
            
            //header("Location:".base_url.'pedido/confirmado');		
           echo '<script>window.location= "'.base_url.'pedidos/confirmado"</script>';

         }else{
            // Redigir al index
            //header("Location:".base_url);
            echo '<script>window.location= "'.base_url.'"</script>';
         }
   }

   public function confirmado(){
		if(isset($_SESSION['identity'])){

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
   
   public function mis_pedidos(){

		Utilidades::isIdentity();
		$usuario_id = $_SESSION['identity']->id;
		$pedido = new Pedidos();
		
      $pedido->setUsuario_id($usuario_id);
      // Saca los pedidos del usuario cuando el usuario_id = al id de tabla de usuario
		$mispedidos = $pedido->gettodoUsuario();
		
		require_once 'views/pedidos/mis_pedidos.php';
	}

}