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
	
	function setid($id) {
		$this->id = $id;
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
	
	//muestra todos los elementos de manera descendente
   public function gettodo() {
		//consultar todas las categorias de la tabla categorias en la database
		$categorias = $this->conexion->query("SELECT * FROM categorias ORDER BY id DESC;");
		return $categorias;
	}
	
	//muestra todos los elementos cunado el id es igual a metodo getid
	public function get_mostrar(){
		$categoria = $this->conexion->query("SELECT * FROM categorias WHERE id={$this->getid()}");
		return $categoria->fetch_object();
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