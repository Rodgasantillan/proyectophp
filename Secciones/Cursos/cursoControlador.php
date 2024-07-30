<?php 
    include("../../Configuraciones/bd.php");

    $sql1 = $conexion->prepare("SELECT c.id, c.nombre_curso AS 'Curso', CONCAT(p.nombre,' ',p.apellidos) AS 'Profesor'
                                FROM cursos AS c
                                INNER JOIN profesores AS p ON p.id = c.idProf");
    $sql1->execute();
    $lstCursos = $sql1->fetchAll();
?>