<?php
//archivo de modelo usuarios.php en donde se les envia los metodos ala class usuario
require_once 'modelo/usuarios.php';

class usuarioController {

  public function registro(){
  //renderiza la vista de registro.php al dar click en el link ubicado en el archivo formroles.php
    require_once "views/usuario/registro.php";
  }

  public function guardar(){
    //metodo para guardar datos en la database mytienda provenientes del post en el archivo regsitro.php
    if(isset($_POST)){

      $nombre = isset($_POST['name']) ? $_POST['name'] : false;
      $apellidos = isset($_POST['lname']) ? $_POST['lname'] : false;
      $email = isset($_POST['email']) ? $_POST['email'] : false;
      $password = isset($_POST['pass']) ? $_POST['pass'] : false;

      if($nombre && $apellidos && $email && $password){
        //instancia o objeto creado con la clase usuario del archivo modelo/usuarios.php
        $usuario = new usuario();
        //intancias creada con los metodos de la clase usuario del archivo modelo/usuarios.php
        $usuario->setnombre($nombre);
        $usuario->setapellido($apellidos);
        $usuario->setcorreo($email);
        $usuario->setcontraseña($password);

        //la instacia guardar() regresa true si la database inserto los datos luego lo almacena y hace un return en la variable $guradar del archivo modelo/usuarios.php
        $save = $usuario->guardar();
            
        if($save){        
          // se crean estas variables de sesion  utilizadas en el archivo de registro.php     
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
    //te redirecciona al controlador usuario/registro que contiene la vista registro.php
    //header("Location:".base_url.'usuario/registro');
    echo '<script>window.location= "'.base_url.'usuario/registro"</script>';
    //exit();
  }
  public function ingresar(){
    if(isset($_POST)){
      // Identificar al usuario
      // Consulta a la base de datos
      $usuario = new usuario();
      $usuario->setcorreo($_POST['email']);
      $usuario->setcontraseña($_POST['pass']);
        
      $identity = $usuario->registrate();
      //var_dump($identity);
      //die();
        
      if($identity && is_object($identity)){
        //variables de sesion utilizadas en el archivo fromroles.php
        $_SESSION['identity'] = $identity;
          
        if($identity->rol == 'admin'){
          $_SESSION['admin'] = true;
        }       
      }else{
        $_SESSION['error_login'] = 'Identificación fallida !!';
      }
    }
    //header("Location:".base_url);
    echo '<script>window.location= "'.base_url.'"</script>';
  }

  public function cerrarsesion(){
    if(isset($_SESSION['identity'])){
      unset($_SESSION['identity']);
    }
    if(isset($_SESSION['admin'])){
      unset($_SESSION['admin']);
    }
    //header("Location:".base_url);
    echo '<script>window.location= "'.base_url.'"</script>';
	}
}