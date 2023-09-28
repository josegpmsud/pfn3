<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id_usuario = $_POST["id_usuario"];
        

        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

        if($_POST['dni'] != ""){
            $dni = $_POST["dni"];
            $result = $mysqli->query("UPDATE usuarios SET dni='$dni' WHERE id_usuario=$id_usuario");
        }
        
        if($_POST['email'] != ""){
            $email = $_POST["email"];
            $result = $mysqli->query("UPDATE usuarios SET email='$email' WHERE id_usuario=$id_usuario");
        }
        
        if(isset($_POST['contrasena'])){
            if($_POST['contrasena'] != ""){
                $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);
                $result = $mysqli->query("UPDATE usuarios SET contrasena='$contrasena' WHERE id_usuario=$id_usuario");
            }
        }

        if($_POST['nombre'] != ""){
            $nombre = $_POST["nombre"];
            $result = $mysqli->query("UPDATE usuarios SET nombre='$nombre' WHERE id_usuario=$id_usuario");
        }

        if($_POST['apellido'] != ""){
            $apellido = $_POST["apellido"];
            $result = $mysqli->query("UPDATE usuarios SET apellido='$apellido' WHERE id_usuario=$id_usuario");
        }

        if($_POST['direccion'] != ""){
            $direccion = $_POST["direccion"];
            $result = $mysqli->query("UPDATE usuarios SET direccion='$direccion' WHERE id_usuario=$id_usuario");
        }

        if($_POST['fecha_nac'] != ""){
            $fecha_nac = $_POST["fecha_nac"];
            $result = $mysqli->query("UPDATE usuarios SET fecha_nac='$fecha_nac' WHERE id_usuario=$id_usuario");
        }
        header("Location: ../views/dashboard.php");          
    }    
?>