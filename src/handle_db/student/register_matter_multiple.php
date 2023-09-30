<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $id_clase = $_POST['id_clase'];

    var_dump($id_clase);
    
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

    $id_usuario = $_SESSION['sesion']['id_usuario'];

        
    try{
        foreach ($id_clase as $key => $value) {
            $stmnt = $mysqli->query("INSERT INTO inscripciones(id_usuario_alumno,id_clase) VALUES ('$id_usuario','$value')");
        }
        
        
        
        header("Location: /src/views/student_matters_multiple.php");        
    
    }catch(mysqli_sql_exception $e){
            echo "Error" . $e->getMessage();
            
    }
    
    }else{
        echo "No estas usando POST para acceder a este archivo";
    }


