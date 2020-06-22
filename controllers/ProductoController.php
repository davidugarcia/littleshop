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
         $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
         
         if($categoria  && $nombre && $descripcion && $precio && $stock){
            $producto = new productos();
            $producto->set_catgid($categoria);
				$producto->set_name($nombre);
				$producto->set_descrip($descripcion);
				$producto->set_precio($precio);
            $producto->set_stock($stock);


            // Guardar la imagen-- vairable superglobal $_FILES['imagen'], que es nombre que se colo en el formulario name="imagen"
				if(isset($_FILES['imagen'])){
					$file = $_FILES['imagen'];
					$filename = $file['name'];
					$mimetype = $file['type'];

					if($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){
                  
                  //si no existe esta el directorio se deben de crear uploads/images
						if(!is_dir('uploads/images')){
                     //crear el directorio
							mkdir('uploads/images', 0777, true);
						}

                  //solo guuarda en la base de datos el nombre de la imagen
                  $producto->set_img($filename);
                  //mover el archivo imagen que se extrae del form al directorio uploads/images
						move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
					}
            }

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