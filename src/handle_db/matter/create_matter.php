<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $nombre_clase = $_POST["nombre_clase"];
    $id_usuario_maestro = $_POST["id_usuario_maestro"];
    //$contrasena = password_hash($_POST["email"], PASSWORD_DEFAULT);

    
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

    try{
        $resultado = $mysqli->query("INSERT INTO clases(nombre_clase, id_usuario_maestro) VALUES ('$nombre_clase','$id_usuario_maestro')");

        if($resultado){
            
            header("Location: ../../views/matters.php");
            
        }else{
            "Error al guardar el clase";
        }

    }catch(mysqli_sql_exception $e){

        if($mysqli->errno == 1062){
            session_start();
            $_SESSION['duplicado'] = "ya existe";
            header("Location: ../../views/matters.php");
        }else{
            echo "Error" . $e->getMessage();
        }
    }

    }else{
        echo "No estas usando POST para acceder a este archivo";
    }