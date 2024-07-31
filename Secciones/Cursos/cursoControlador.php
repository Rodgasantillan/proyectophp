<?php 
    include("../../Configuraciones/bd.php");

    $sql1 = $conexion->prepare("SELECT c.id, c.nombre_curso AS 'Curso', CONCAT(p.nombre,' ',p.apellidos) AS 'Profesor'
                                FROM cursos AS c
                                INNER JOIN profesores AS p ON p.id = c.idProf");
    $sql1->execute();
    $lstCursos = $sql1->fetchAll();

    $sql2 = $conexion->prepare("SELECT id, CONCAT(nombre, ' ', apellidos) AS 'nombreProf' FROM profesores");
    $sql2->execute();
    $lstProfs = $sql2->fetchAll();

    $idCurso        = isset($_POST['id'])?$_POST['id']:"";
    $nombreCurso    = isset($_POST['nombre_curso'])?$_POST['nombre_curso']:"";
    $idProf         = isset($_POST['idProf'])?$_POST['idProf']:"";
    $accion         = isset($_POST['btnAccion'])?$_POST['btnAccion']:"";

    if($accion != "")
    {
        switch($accion){
            case 'btnAdd': 
                $sql = $conexion->prepare("INSERT INTO cursos (id, nombre_curso, idProf) VALUES (NULL, :nombreCurso, :idProf);");
                $sql->bindParam(":nombreCurso", $nombreCurso);
                $sql->bindParam(":idProf", $idProf);
                $sql->execute();

                if(isset($sql)){
                    $mensaje = "Curso Registrado Correctamente";
                    echo "<script>alert('".$mensaje."');</script>";
                }
                else{
                    $mensaje = "Error al registrar el curso";
                    echo "<script>alert('".$mensaje."');</script>";
                }
            break;
            case 'btnEdit': break;
            case 'btnDelete': break;
            case 'btnSelect': break;
            default: break;
        }
    }

    print_r($_POST);
?>