<?php

class Utilidades{
	
	//metodo para eliminar el aviso de vista de registro.php si se registro o no
	public static function borrarSession($name){

		if(isset($_SESSION[$name])){
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		
		return $name;
	}
	
	//montrar la vista dependiendo de si existe o no variable de sesion
	public static function esAdministrador(){
		if(!isset($_SESSION['admin'])){
			//header("Location:".base_url);
			//si no esxiste esa variable global redireccionar a url default
			echo '<script>window.location= "'.base_url.'"</script>';
		}else{
			//si existe admin
			return true;
		}
	}
	
	public static function mostrarcat(){
		//metodo para mostrar las categias de productos en el nav
		require_once 'modelo/category.php';
		$categoria = new Categoria();
		$categorias = $categoria->gettodo();
		return $categorias;
	}

}