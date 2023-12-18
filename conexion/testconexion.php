<?php
include 'conexion.php';
if ($conexion->error){
    echo "Problemas de conexion: ".$conexion->error;
    }else{
        echo "Conexion establecida con la base de datos";
    }
?>