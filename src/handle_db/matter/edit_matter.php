<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id_clase = $_POST["id_clase"];
        

        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

        if($_POST['nombre_clase'] != ""){
            $nombre_clase = $_POST["nombre_clase"];
            $result = $mysqli->query("UPDATE clases SET nombre_clase='$nombre_clase' WHERE id_clase=$id_clase");
        }
        
        if($_POST['id_usuario_maestro'] != ""){
            $id_usuario_maestro = $_POST["id_usuario_maestro"];
            $result = $mysqli->query("UPDATE clases SET id_usuario_maestro='$id_usuario_maestro' WHERE id_clase=$id_clase");
        }
        
        
        header("Location: /src/views/matters.php");          
    }    
?>