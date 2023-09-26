<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    if($email == ""){
        header("Location: ../index.php");
    }
    
    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
    
    try{
        
    $stmnt = $mysqli->query("SELECT * FROM usuarios WHERE email='$email'");

    if($stmnt->num_rows === 1){
        $result = $stmnt->fetch_assoc();
        //var_dump($result);
        if(password_verify($pass, $result['pass'])){
            //var_dump($result['pass']);
            session_start();
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $pass;
            header("Location: ../views/show.php?email=$email");
        }else{
            //var_dump($result['pass']);
            header("Location: ../views/login.php");
        }
    }

    }catch(mysqli_sql_exception $e){
        echo "Error" . $e->getMessage();
        //header("Location: ../views/login.php");        
    }


    

}else{
    echo "No estas usando POST para acceder a este archivo";
}