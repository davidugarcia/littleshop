<?php
//conexion al modelo de category.php
require_once 'modelo/category.php';
require_once 'modelo/product.php';

class categoriasController{

   public function index(){
		Utilidades::esAdministrador();
		//instacia creada con la clase del modelo categoria y llamar metodos de esa clase
		$categoria = new Categoria();
		//almacena la instancia en la variable $categorias para utilizarla en la vista index.php y colocar los elementos en la tabla
		//esta variable almacena una objeto que regresa el metodo gettodo() se utliza en el archivo views/productos/crear.php
		$categorias = $categoria->gettodo();
		//mostrar la vista con la categorias exixtente en la database
		require_once 'views/category/index.php';
	}

	public function ver(){
		//el id es el cuando se selecciona una categoria que pertenece ala tabla categorias
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setid($id);
			//esta variable $categoria es utilizada en la vista ver.php de categorias
			$categoria = $categoria->get_mostrar();
			
			// Conseguir productos;
			$producto = new Productos();
			$producto->set_catgid($id);
			//esta variable productos es utilizada en la vista ver.php de categorias
			$productos = $producto->todas_categ();
		}
		
		require_once 'views/category/ver.php';
	}
	

	public function crearcat(){
		
		Utilidades::esAdministrador();
		//redireccionar hacia la vista crear.php
		require_once 'views/category/crear.php';
	}

	public function guardarcat(){

		Utilidades::esAdministrador();
		if(isset($_POST) && isset($_POST['name'])){
			// Guardar la categoria en database creando una instacia y utilizando los metodos del archivo modelo de category.php
			$categoria = new Categoria();

			$categoria->setname($_POST['name']);
			//esta variable save es utilizada en la vista ver.php de categorias
			$save = $categoria->guardarcateg();
		}
		//header("Location:".base_url."categoria/index");
		echo '<script>window.location= "'.base_url.'categorias/index"</script>';
	}
}