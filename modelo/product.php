<?php

class productos {

   private $id;
   private $catg_id;
   private $nombre;
   private $descripcion;
   private $precio;
   private $stock;
   private $oferta;
   private $fecha;
   private $imagen;
   private $conexion;

   //contructor para utilizar el metodo conectar de la base de datos.
   //este metodo se utilizara enlos archivos donde se requiera conectarse ala database
   // el metodo conectar regresa el valor true si existe la conexion
   public function __construct(){
      $this->conexion = database::conectar();
   }

   public function set_id($id){
      $this->id = $id;
   }

   public function set_catgid($catgid){
      $this->catg_id = $catgid;
   }

   public function set_name($name){
      $this->nombre = $this->conexion->real_escape_string($name);
   }

   public function set_descrip($descrip){
      $this->descripcion = $this->conexion->real_escape_string($descrip);
   }

   public function set_precio($precio){
      $this->precio = $this->conexion->real_escape_string($precio);
   }

   public function set_stock($stock){
      $this->stock = $this->conexion->real_escape_string($stock);
   }

   public function set_oferta($oferta){
      $this->oferta = $this->conexion->real_escape_string($oferta);
   }

   public function set_date($date){
      $this->fecha = $date;
   }

   public function set_img($img){
      $this->imagen = $img;
   }

   public function get_id(){
      return $this->id;
   }

   public function get_catid(){
      return $this->catg_id;
   }

   public function get_name(){
      return $this->nombre;
   }

   public function get_descrip(){
      return $this->descripcion;
   }

   public function get_precio(){
      return $this->precio;
   }

   public function get_stock(){
      return $this->stock;
   }

   public function get_oferta(){
      return $this->oferta;
   }

   public function get_date(){
      return $this->fecha;
   }

   public function get_img(){
      return $this->imagen;
   }

   public function get_todo(){
      $productos = $this->conexion->query("SELECT * FROM productos ORDER BY id DESC");
      return $productos;
   }

   public function guardar(){
      $sql = "INSERT INTO productos VALUES(NULL, '{$this->get_catid()}', '{$this->get_name()}', '{$this->get_descrip()}', {$this->get_precio()}, {$this->get_stock()}, NULL, CURDATE(), '{$this->get_img()}');";
      $registrar = $this->conexion->query($sql);

      $result = false;
		if($registrar){
			$result = true;
		}
		return $result;
   }

}