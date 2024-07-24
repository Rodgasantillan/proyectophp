<?php 
    $host   = "localhost:3307";//servidor
    $dbname = "proyectophp";//base de datos
    $user   = "root";//usuario
    $pass   = "";//contraseña

    try{
        $conexion = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
        //Activamos las Excepciones de PDO
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Conexión fallida: ".$e->getMessage());
    }
?>