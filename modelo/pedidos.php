<?php

class Pedidos{
	private $id;
	private $usuario_id;
	private $provincia;
	private $localidad;
	private $direccion;
	private $coste;
	private $estado;
	private $fecha;
	private $hora;

	private $conexion;
	
	public function __construct() {
		$this->conexion = database::conectar();
   }
   
   //set
   function setId($id) {
		$this->id = $id;
	}

	function setUsuario_id($usuario_id) {
		$this->usuario_id = $usuario_id;
	}

	function setProvincia($provincia) {
		$this->provincia = $this->conexion->real_escape_string($provincia);
	}

	function setLocalidad($localidad) {
		$this->localidad = $this->conexion->real_escape_string($localidad);
	}

	function setDireccion($direccion) {
		$this->direccion = $this->conexion->real_escape_string($direccion);
	}

	function setCoste($coste) {
		$this->coste = $coste;
	}

	function setEstado($estado) {
		$this->estado = $estado;
	}

	function setFecha($fecha) {
		$this->fecha = $fecha;
	}

	function setHora($hora) {
		$this->hora = $hora;
	}

   //get 
	function getId() {
		return $this->id;
	}

	function getUsuario_id() {
		return $this->usuario_id;
	}

	function getProvincia() {
		return $this->provincia;
	}

	function getLocalidad() {
		return $this->localidad;
	}

	function getDireccion() {
		return $this->direccion;
	}

	function getCoste() {
		return $this->coste;
	}

	function getEstado() {
		return $this->estado;
	}

	function getFecha() {
		return $this->fecha;
	}

	function getHora() {
		return $this->hora;
	}

	
	public function getAll(){
		$productos = $this->conexion->query("SELECT * FROM pedidos ORDER BY id DESC");
		return $productos;
	}
	
	public function getOne(){
		$producto = $this->conexion->query("SELECT * FROM pedidos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
	
	public function getOneByUser(){
		$sql = "SELECT p.id, p.coste FROM pedidos p "
				//. "INNER JOIN lineas_pedidos lp ON lp.pedido_id = p.id "
				. "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC LIMIT 1";
			
		$pedido = $this->conexion->query($sql);
			
		return $pedido->fetch_object();
	}
	
	public function getAllByUser(){
		$sql = "SELECT p.* FROM pedidos p "
				. "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC";
			
		$pedido = $this->conexion->query($sql);
			
		return $pedido;
	}
	
	
	public function getProductosByPedido($id){
//		$sql = "SELECT * FROM productos WHERE id IN "
//				. "(SELECT producto_id FROM lineas_pedidos WHERE pedido_id={$id})";
	
		$sql = "SELECT pr.*, lp.unidades FROM productos pr "
				. "INNER JOIN lineas_pedidos lp ON pr.id = lp.producto_id "
				. "WHERE lp.pedido_id={$id}";
				
		$productos = $this->conexion->query($sql);
			
		return $productos;
	}
   
	public function guardar(){
      //inserta los pedidos en la tabla pedidos de la datbase
		$sql = "INSERT INTO pedidos VALUES(NULL, {$this->getUsuario_id()}, '{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), CURTIME());";
		$save = $this->conexion->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
   
   //relaciona un pedido con los datos del usuario 
	public function guardar_linea(){

      //Devuelve el ID de AUTO_INCREMENT de la última fila que se ha insertado o actualizado en una tabla:
		$sql = "SELECT LAST_INSERT_ID() as 'pedido';";
		$query = $this->conexion->query($sql);
		$pedido_id = $query->fetch_object()->pedido;
      
      //variable $_SESSION['carrito'] creada desde el archivo controlador de carrito metodo add
		foreach($_SESSION['carrito'] as $elemento){
			$producto = $elemento['producto'];
         
         //inserta en la tabla lineas_pedidos
			$insert = "INSERT INTO lineas_pedidos VALUES(NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
			$save = $this->conexion->query($insert);
			
      //			var_dump($producto);
      //			var_dump($insert);
      //			echo $this->db->error;
      //			die();
		}
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function edit(){
		$sql = "UPDATE pedidos SET estado='{$this->getEstado()}' ";
		$sql .= " WHERE id={$this->getId()};";
		
		$save = $this->conexion->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
}