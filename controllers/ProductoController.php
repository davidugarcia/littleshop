<?php
require_once 'modelo/product.php';

class productoController {

   public function index() {
      //rederizar vista de menuproduct.php
      require_once 'views/productos/menuproduct.php';
   }

   public function gestionproduct(){

      Utilidades::esAdministrador();
      //crear instacia con la clase del archivo de product.php
      $producto = new productos();
      $productos = $producto->get_todo();

      require_once 'views/productos/gestion.php';
   }

   public function crearproducto(){
      Utilidades::esAdministrador();
      require_once 'views/productos/crear.php';
   }

   public function guardarprod(){
      Utilidades::esAdministrador();
      if(isset($_POST)){

         $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
         $nombre = isset($_POST['name']) ? $_POST['name'] : false;
			$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
			$precio = isset($_POST['precio']) ? $_POST['precio'] : false;
			$stock = isset($_POST['stock']) ? $_POST['stock'] : false;
         // $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
         
         if($categoria  && $nombre && $descripcion && $precio && $stock){
            $producto = new productos();
            $producto->set_catgid($categoria);
				$producto->set_name($nombre);
				$producto->set_descrip($descripcion);
				$producto->set_precio($precio);
            $producto->set_stock($stock);

            $save = $producto->guardar();

            if($save){
					$_SESSION['producto'] = "complete";
				}else{
					$_SESSION['producto'] = "failed";
				}
            
         }else{
				$_SESSION['producto'] = "failed";
			}
		}else{
			$_SESSION['producto'] = "failed";
		}
   //header('Location:'.base_url.'producto/gestionproduct');
   echo '<script>window.location= "'.base_url.'producto/gestionproduct"</script>';
   }
}