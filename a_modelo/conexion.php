<?php
  class Conexion{
      public function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "crud_php";

        $link = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        return $link;
      }
  }
 ?>
