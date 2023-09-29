<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id_usuario =  $_POST['id_usuario'];
        $email =  $_POST['email'];
        $id_rol =  $_POST['id_rol'];
        $estado =  $_POST['estado'];        

        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

        if($_POST['email'] != ""){
            $email = $_POST["email"];
            $result = $mysqli->query("UPDATE usuarios SET email='$email' WHERE id_usuario=$id_usuario");
        }
        
        if($_POST['id_rol'] != ""){
            $id_rol = $_POST["id_rol"];
            $result = $mysqli->query("UPDATE usuarios SET id_rol='$id_rol' WHERE id_usuario=$id_usuario");
        }

        if($_POST['estado'] != ""){
            $estado = $_POST["estado"];
            $result = $mysqli->query("UPDATE usuarios SET estado='$estado' WHERE id_usuario=$id_usuario");
        }
                
        header("Location: /src/views/permissions.php");          
    }    
?>