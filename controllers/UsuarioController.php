<?php
//archivo del modelo usuarios en donde se les envia los metodos ala class usuario
require_once 'modelo/usuarios.php';

class usuarioController {

   public function registro(){
    require_once "views/usuario/registro.php";
   }

   public function guardar(){
      if(isset($_POST)){

        $nombre = isset($_POST['name']) ? $_POST['name'] : false;
        $apellidos = isset($_POST['lname']) ? $_POST['lname'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['pass']) ? $_POST['pass'] : false;

        if($nombre && $apellidos && $email && $password){
              //instancia o objeto creado con la clase usuario del archivo modelo/usuarios.php
              $usuario = new Usuario();
              //metodo de la clase usuario del archivo modelo/usuarios.php
              $usuario->setnombre($nombre);
              $usuario->setapellido($apellidos);
              $usuario->setcorreo($email);
              $usuario->setcontraseña($password);

              $save = $usuario->guardar();
            
              if($save){               
                $_SESSION['register'] = "complete";
              }else{
                $_SESSION['register'] = "failed1";
              }
        }else{
			  	$_SESSION['register'] = "failed";
			  }
      }else{
        $_SESSION['register'] = "failed2";
      }
     header("Location:".base_url.'usuario/registro');
    }

}