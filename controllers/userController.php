<?php

class userController {

   public function registrar(){
   require_once "views/registros/usuarios.php";
   }

   public function guardar_registro(){
     if(isset($_POST)){
         var_dump($_POST);
     } 
   }


}