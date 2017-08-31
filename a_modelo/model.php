<?php
  require_once "conexion.php";
      class Datos{
      #MODELO REPORTE
              public function vistaUsuarioModel($tabla){
                      $stmt= Conexion::conectar()->prepare("SELECT  id,usuario,password,email  FROM $tabla ");
                      $stmt ->execute();
                      //FETCH() =Obtine una fila de un c onjunto de  resultadios asociados al objeto PDOSatatment.
                      //FETCHALL() =Obtine una TODAS las filas de un c onjunto de  resultadios asociados al objeto PDOSatatment.
                      return $stmt ->fetchAll();
                     $stmt ->close();
              }
      }
?>
