<?php

function obtenerServicios() {
    try {
        //importar una conexion (databases en esete caso)
        require 'databases.php'; 
    
        //escribir el codigo sql
   $sql = "SELECT * FROM servicios;"; 
   $consulta = mysqli_query($db, $sql);
 
        //obtener los resultados

        echo "<pre>";
        var_dump( mysqli_fetch_assoc($consulta) ); 
        echo "</pre>";
      } catch (\Throwable $th) {
        var_dump($th);
      }
}

obtenerServicios();

