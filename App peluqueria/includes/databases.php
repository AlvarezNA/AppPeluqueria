<?php 



$db = mysqli_connect ("localhost", "root", "shinigami94", "appsalon");  

if(!$db) {
    echo "error en la conexion";
    exit; 
} 
echo  "conexion correcta"; 