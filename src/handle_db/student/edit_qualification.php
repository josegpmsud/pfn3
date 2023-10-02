<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id_inscripcion = $_POST["id_inscripcion"];
        $id_clase = $_POST["id_clase"];
        
        session_start();
        $_SESSION['id_clase']=$_POST["id_clase"];

        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

        if($_POST['nota_alumno'] != ""){
            $nota_alumno = $_POST["nota_alumno"];
            $result = $mysqli->query("UPDATE inscripciones SET nota_alumno='$nota_alumno' WHERE id_inscripcion=$id_inscripcion");
        }
        
        if($_POST['mensaje'] != ""){
            $mensaje = $_POST["mensaje"];
            $result = $mysqli->query("UPDATE inscripciones SET mensaje='$mensaje' WHERE id_inscripcion=$id_inscripcion");
        }
        
        
        header("Location: /src/views/teacher_students.php");          
    }    
?>