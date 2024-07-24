<?php 
    include("../../Configuraciones/bd.php");

    /*if($conexion){
        echo "<script>alert('Conexión Exitosa');</script>";
    }*/

    //Consultamos información de la tabla profesores
    $sql = "SELECT * FROM profesores";
    $lstProfesores = $conexion->query($sql);
    $profesores = $lstProfesores->fetchAll();
    
    //print_r($profesores);
?>