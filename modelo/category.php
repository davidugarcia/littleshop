<?php

class Categoria{

	private $id;
	private $nombre;
   private $conexion;

   //contructor para utilizar el metodo conectar de la base de datos.
   //este metodo se utilizara enlos archivos donde se requiera conectarse ala database
   // el metodo conectar regresa el valor true si existe la conexion
   public function __construct(){
      $this->conexion = database::conectar();
   }

  function setname($name) {
		$this->nombre = $this->conexion->real_escape_string($name);
	}

   function getid() {
		return $this->id;
	}

	function getname() {
		return $this->nombre;
   }
   
   public function gettodo() {
		//consultar todas las categorias de la tabla categorias en la database
		$categorias = $this->conexion->query("SELECT * FROM categorias ORDER BY id DESC;");
		return $categorias;
   }

   public function guardarcateg(){
		//inserta categorias en la tabla de la database
		$sql = "INSERT INTO categorias VALUES(NULL, '{$this->getname()}');";
		$save = $this->conexion->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
   
}