<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    if($email == "" || $contrasena == "" ){
        header("Location: ../../index.php");
    }
    
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
    
    try{
        
    $stmnt = $mysqli->query("SELECT * FROM usuarios u inner join roles r on u.id_rol = r.id_rol WHERE email='$email'");

    if($stmnt->num_rows === 1){
        $result = $stmnt->fetch_assoc();
        //var_dump($result);
        if(password_verify($contrasena, $result['contrasena'])){
            //var_dump($result['pass']);
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['contrasena'] = $contrasena;
            $_SESSION['sesion'] = $result;

            echo "ingresaste correctamente";
            //header("Location: ../views/show.php?email=$email");
            header("Location: ../views/dashboard.php");
        }else{
            //var_dump($result['pass']);
            header("Location: ../../index.php");
            //echo "no es correcta la contraseña";
        }
    }

    }catch(mysqli_sql_exception $e){
        echo "Error" . $e->getMessage();
        header("Location: ../../index.php");

    }

}else{
    echo "No estas usando POST para acceder a este archivo";
}