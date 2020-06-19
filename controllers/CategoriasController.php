<?php
require_once 'modelo/category.php';

class categoriasController{

   public function index(){
		$categoria = new Categoria();
		$categorias = $categoria->gettodo();
		
		require_once 'views/category/index.php';
	}

	
}