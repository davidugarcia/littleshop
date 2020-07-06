<?php
/*clase para conectarse en una base de datos*/
class database {
 /* $host="127.0.0.1";
   $user="root";
   $password="";
   $dbname="mytienda";*/
   public static function conectar(){
      $conectar = new mysqli("localhost", "root", "", "mytienda");
      $conectar->query ("SET NAMES 'UTF8'");
      return $conectar;

   //$con->close();
   }

}