<?php
//se utiliza para asociar toda la variables de session con todo los archivos que esta en el archivo index
session_start();
//autocarga de los archivos controladores que contienens la clase y el metodo a utilizar
require_once 'autoload.php';
//conexion con base de datos my tienda
require_once 'confg/basedatos.php';
//define un trozo de la url como estatica y sino no carga un controlador carga otro por default.
require_once 'confg/parametros.php';
//utilidades
require_once 'helper/utility.php';
//visitas de header y formroles
require_once 'views/diseño/header.php';
require_once 'views/diseño/formroles.php';

//function de error
function show_error(){
	$error = new errorController();
	$error->errorcontraladormetodo();
}

if(isset($_GET['controller'])){
	//para obtener nombre del controlardo = el nombre de la clase junto ala palabra concatenada Controller
	$nombre_controlador = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	//cuando no existe el controlador y el metodo coloca por default 
	//un contorlador ---- cong/parametro.php
	$nombre_controlador = controller_default;	
}else{
	show_error();
	exit();
}

// si existe la clase de controller. 
if(class_exists($nombre_controlador)){	
//crear un objeto o instancia con la clase exitente
	$controlador = new $nombre_controlador();
	//si existe el metodo en la clase solicitada
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		//almacenar el metodo 
		$action = $_GET['action'];
		//con la instacia llama el metodo que se creo
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		//cuando no existe el controlador y el metodo coloca por default 
		//un contorlador ---- cong/parametro.php 
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		show_error();
	}
}else{
	show_error();
}

//vista footer
require_once 'views/diseño/footer.php';