<?php session_start() ?>

<?php 
if(isset($_SESSION['sesion']['id_rol'])){
    }
else{
    header("Location: /index.php");
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="/src/js/main.js" defer></script>
    <title>University</title>
</head>