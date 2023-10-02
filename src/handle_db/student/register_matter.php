<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $id_clase = $_POST['id_clase'];
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

    $id_usuario = $_SESSION['sesion']['id_usuario'];

        
    try{        
        $stmnt = $mysqli->query("INSERT INTO inscripciones(id_usuario_alumno,id_clase) VALUES ('$id_usuario','$id_clase')");
            header("Location: /src/views/student_matters.php");        
    
    }catch(mysqli_sql_exception $e){
            echo "Error" . $e->getMessage();
            
    }
    
    }else{
        echo "No estas usando POST para acceder a este archivo";
    }


    