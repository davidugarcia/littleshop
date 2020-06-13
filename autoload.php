<?php
/*esta function lee los archivos php que se toman como controller en la carpeta 
controllers y asi no estar agregando requires_once de archivos que sean
controladores*/

/*el archivo que se cree en la carpeta controladores debe de llevar el 
nombre mas la palabra Controller, luego si se crea un un clase en este archivo debe de llamarse 
de igual manera que el archivo, asi se hara uso de esta function llamada autocarga*/
function controllers_autoload($classname){
	include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');
