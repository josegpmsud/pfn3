<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
        
    $id_clase = $_POST["id_clase"];    
        
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

    try{
        $resultado = $mysqli->query("DELETE FROM clases WHERE id_clase='$id_clase'");

        if($resultado){
            
            header("Location: /src/views/dashboard.php");
            
        }else{
            "Error al eliminar clase";
        }

    }catch(mysqli_sql_exception $e){

        if($mysqli->errno == 1062){
            
            header("Location: /src/views/dashboard.php");
        }else{
            echo "Error" . $e->getMessage();
        }
    }

    }else{
        echo "No estas usando POST para acceder a este archivo";
    }