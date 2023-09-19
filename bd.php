<?php
    //Conexión a la base de datos
    $servidor="localhost"; //127.0.0.1
    $usuario="root";
    $contrasenia="";
    $baseDeDatos="bdempleados";

    try {
        $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
?>