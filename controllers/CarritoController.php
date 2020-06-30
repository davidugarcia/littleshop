<?php

//cargar modelo de product.php
require_once 'modelo/product.php';

class carritoController {

   public function index(){
		if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
			//$variable $carrito se utiliza en el archivo vista de compras.php
			$carrito = $_SESSION['carrito'];
		}else{
			$carrito = array();
		}
		require_once 'views/carrito/compras.php';
	}
	  
	public function add(){
      //si esxiste el id del prodcuto
		if(isset($_GET['id'])){
			$producto_id = $_GET['id'];
		}else{
			header('Location:'.base_url);
		}
		
		if(isset($_SESSION['carrito'])){
			$counter = 0;
			foreach($_SESSION['carrito'] as $indice => $valor){
				if($valor['id_producto'] == $producto_id){
					$_SESSION['carrito'][$indice]['unidades']++;
					$counter++;
				}
			}	
      }
      
      //aqui se crea la variable superglobal $_SESSION['carrito'][] al dar click al boton comprar de productos
      if(!isset($counter) || $counter == 0){
			// Conseguir producto
			$producto = new Productos();
			$producto->set_id($producto_id);
			$producto = $producto->get_productid();

			// Añadir al carrito
			if(is_object($producto)){
            // se crea un arreglo asociativo
				$_SESSION['carrito'][] = array(
               //key=>valor
					"id_producto" => $producto->id,
					"precio" => $producto->precio,
					"unidades" => 1,
					"producto" => $producto
				);
			}
		}
      
      //te dirige al metodo index del de la clase carrito
      //header("Location:".base_url."carrito/index");
      echo '<script>window.location= "'.base_url.'carrito/index"</script>';
   }

   public function delete(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			unset($_SESSION['carrito'][$index]);
		}
      //header("Location:".base_url."carrito/index");
      echo '<script>window.location= "'.base_url.'carrito/index"</script>';
	}
	
	public function up(){

		if(isset($_GET['index'])){
			$index = $_GET['index'];
			$_SESSION['carrito'][$index]['unidades']++;
      }
      
      //header("Location:".base_url."carrito/index");
      echo '<script>window.location= "'.base_url.'carrito/index"</script>';
	}

   public function down(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			$_SESSION['carrito'][$index]['unidades']--;
			
			if($_SESSION['carrito'][$index]['unidades'] == 0){
				unset($_SESSION['carrito'][$index]);
			}
		}
      //header("Location:".base_url."carrito/index");
      echo '<script>window.location= "'.base_url.'carrito/index"</script>';
	}
	
	public function delete_all(){
		unset($_SESSION['carrito']);
      //header("Location:".base_url."carrito/index");
      echo '<script>window.location= "'.base_url.'carrito/index"</script>';
	}
	
}