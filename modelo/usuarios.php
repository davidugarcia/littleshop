<?php

class usuario {

   private $id;
   private $nombre;
   private $apellido;
   private $email;
   private $password;
   private $rol;
   private $imagen;
   private $conexion;

   //contructor para utilizar el metodo conectar de la base de datos.
   //este metodo se utilizara enlos archivos donde se requiera conectarse ala database
   // el metodo conectar regresa el valor true si existe la conexion
   public function __construct(){
      $this->conexion = Database::conectar();
   }

   function setid($identify){
      $this->id = $identify;
   }
   
   function setnombre($name){
      $this->nombre = $this->conexion->real_escape_string($name);
   }

   function setapellido($lastname){
      $this->apellido = $this->conexion->real_escape_string($lastname);
   }
   
   function setcorreo($email){
      $this->email = $this->conexion->real_escape_string($email);
   }

   function setcontraseña($pass){
      $this->password = $pass;
   }
   
   function setrol($roles){
      $this->rol = $roles;
   }

   function setimagen($img){
      $this->imagen = $img;
   }
   //-----------------------------------------------------------------------
   function getid(){
     return  $this->id;
   }

   function getnombre(){
      return  $this->nombre;
    }

    function getapellido(){
      return  $this->apellido;
    }

    function getcorreo(){
      return  $this->email;
    }

    function getcontraseña(){
      return password_hash($this->conexion->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getrol(){
      return  $this->rol;
    }

    function getimagen(){
      return  $this->imagen;
    }
   //---------------------------------------------------------------------------------
   public function guardar(){
      $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getnombre()}', '{$this->getapellido()}', '{$this->getcorreo()}', '{$this->getcontraseña()}', 'user', null);";
      $registrar = $this->conexion->query($sql);

      $result = false;
		if($registrar){
			$result = true;
		}
		return $result;
   }
}