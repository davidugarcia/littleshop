<?php
require_once 'modelo/product.php';

class productoController {

   public function index() {
		//mostrar productos actuales
		$producto = new Productos();
		//regresa todos los campos de la tabla prducto de manera randow con limite de 6 items
		$productos = $producto->mostrarproduct(6);
      //rederizar vista de menuproduct.php
      require_once 'views/productos/menuproduct.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		
			$producto = new Productos();
			$producto->set_id($id);
			//variable utilizada en el archivo producto ver.php
			//regresa todos los campos de la tabla producto depediendo el id 
			$product = $producto->get_productid();
			
		}
		require_once 'views/productos/ver.php';
	}

   public function gestionproduct(){

      Utilidades::esAdministrador();
      //crear instacia con la clase del archivo de product.php
      $producto = new Productos();
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
         //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
         
         if($categoria  && $nombre && $descripcion && $precio && $stock){
            $producto = new Productos();
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

                  //solo guarda en la base de datos el nombre de la imagen
                  $producto->set_img($filename);
                  //mover el archivo imagen que se extrae del form al directorio uploads/images
						move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
					}
				}
				
				if(isset($_GET['id'])){
					$id = $_GET['id'];
					$producto->set_id($id);
					
					$save = $producto->edit();
				}else{
					$save = $producto->guardar();
				}

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

   public function editar(){
		//este metodo manda allamr a la database los datos a editar en el form de crear.php
		Utilidades::esAdministrador();
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$edit = true;

			$producto = new productos();
			$producto->set_id($id);
			
			$pro = $producto->get_productid();
				
			require_once 'views/productos/crear.php';
			
		}else{
         //header('Location:'.base_url.'producto/gestion');
         echo '<script>window.location= "'.base_url.'producto/gestionproduct"</script>';
		}
   }
   
   public function eliminar(){
		Utilidades::esAdministrador();
		
		if(isset($_GET['id'])){
			$id = $_GET['id'];
         $producto = new Productos();
         //envia al modelo de producct el id recibido por el id en el boton de eliminar del archivo views/gestion.php
			$producto->set_id($id);
         
         //recibe un true o false si realizo la eliminacion de registro
			$delete = $producto->delete();
			if($delete){
				$_SESSION['borrar'] = 'complete';
			}else{
				$_SESSION['borrar'] = 'failed';
			}
		}else{
			$_SESSION['borrar'] = 'failed';
		}
		//header('Location:'.base_url.'producto/gestion');
      echo '<script>window.location= "'.base_url.'producto/gestionproduct"</script>';
	}
}