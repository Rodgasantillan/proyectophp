<?php 
    include("../../Configuraciones/bd.php");

    $id = isset($_POST['id'])?$_POST['id']:"";
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
    $app = isset($_POST['apellidos'])?$_POST['apellidos']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $btnAccion = isset($_POST['btnAccion'])?$_POST['btnAccion']:"";

    if($btnAccion != ""){
        switch($btnAccion){
            case 'btnAdd': 
                #echo "<script>alert('Presionaste el boton guardar');</script>";
                $sql = $conexion->prepare("INSERT INTO profesores (id,nombre,apellidos,email) 
                                VALUES (NULL, :nombre,:app, :email);");
                $sql->bindParam(":nombre",$nombre);
                $sql->bindParam(":app", $app);
                $sql->bindParam(":email", $email);
                $sql->execute();

                if(isset($sql)){
                    $mensaje = "Información Registrada Correctamente";
                    echo "<script>alert('".$mensaje."');</script>";
                }
                else{
                    $mensaje = "Error al Registrar la Información";
                    echo "<script>alert('".$mensaje."');</script>"; 
                }
            break;
            case 'btnEdit': 
                $sql = $conexion->prepare("UPDATE profesores SET nombre = :nombre, apellidos = :app , email = :email WHERE id = :id");
                $sql->bindParam(":nombre",$nombre);
                $sql->bindParam(":app", $app);
                $sql->bindParam(":email", $email);
                $sql->bindParam(":id", $id);
                $sql->execute();

                if(isset($sql))
                {
                    $mensaje = "Información Corregida";
                    echo "<script>alert('".$mensaje."');</script>";
                }
                else{
                    $mensaje = "Error al corrgir la información";
                    echo "<script>alert('".$mensaje."');</script>";
                }
            break;
            case 'btnDelete': 
                #echo "<script>alert('Presionaste el boton eliminar');</script>";
            break;
            case 'btnSelect': 
                $sql = $conexion->prepare("SELECT * FROM profesores WHERE id = :id");
                $sql->bindParam(":id", $id);
                $sql->execute();

                if(isset($sql)){
                    $profesor = $sql->fetch(PDO::FETCH_ASSOC);
                    $nombreProfe = $profesor['nombre'];
                    $appProfe = $profesor['apellidos'];
                    $emailProfe = $profesor['email'];
                }
                else{
                    $mensaje = "Error, información no encontrada";
                    echo "<script>alert('".$mensaje."');</script>";
                }
            break;
            default: break;
        }
    }

    print_r($_POST);

    //Consultamos información de la tabla profesores
    $sql = "SELECT * FROM profesores";
    $lstProfesores = $conexion->query($sql);
    $profesores = $lstProfesores->fetchAll();
    
    //print_r($profesores);
?>