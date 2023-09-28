<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    //extract($_POST);
    $id_rol = $_POST['id_rol'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $contrasena = password_hash($email, PASSWORD_DEFAULT);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $fecha_nac = $_POST['fecha_nac'];
   
    //var_dump($_POST);

    //var_dump($contrasena);
    
    
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

    try{
        $resultado = $mysqli->query("insert into usuarios(dni, email, contrasena, nombre, apellido, direccion, fecha_nac, estado, id_rol) values ('$dni','$email','$contrasena','$nombre','$apellido','$direccion','$fecha_nac', true, '$id_rol')");

        
        if($resultado){
            
            
            header("Location: ../../../views/students.php");
            
        }else{
            "Error al guardar el maestro";
        }

    }catch(mysqli_sql_exception $e){

        if($mysqli->errno == 1062){
            session_start();
            $_SESSION['duplicado'] = "ya existe";
            header("Location: ../../../views/students.php");
        }else{
            echo "Error" . $e->getMessage();
        }
    }

    }else{
        echo "No estas usando POST para acceder a este archivo";
    }