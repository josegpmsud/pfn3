<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>University</title>
</head>

<body class="bg-orange-100 h-screen flex justify-center items-center">
   
    <main class="w-screen">
        <div class="w-1000">
            <div class="h-56">
                <img src="/assets/logo.jpg" alt="logo" class="h-full">
            </div>
            <section class="h-72 w-100 flex justify-center flex-col items-center bg-slate-50  ">
                
                <h1 class="">Bienvenido Ingresa con tu cuenta</h1>

                <p class="">
                    <em class="">
                        <?php
                session_start();
                if(isset($_SESSION['mess'])){
                    echo $_SESSION['mess'];
                    unset($_SESSION['mess']);
                }
                ?></em>

                </p>

                <form action="./src/handle_db/login.php" method="post">

                    <div class="">
                        
                        <input class="" type="email" placeholder="Email" name="email" autofocus require>
                        <span class="material-symbols-outlined"> mail </span>
                        
                    </div>

                    <div class="">
                        
                        <input class="" type="password" placeholder="Password" name="contrasena" require>
                        <span class="material-symbols-outlined"> lock </span>
                    
                    </div>

                    <div class="">
                        <button class="bg-sky-500 text-white" type="submit">Ingresar</button>
                    </div>
                </form>



                
                
                
            </section>
            
            <div class="">
                <p class="">Información de Acceso</p>
                <p class="">Admin</p>
                <p class="">user: admin@admin</p>
                <p class="">pass: admin</p>
                <p class="">Maestros</p>
                <p class="">user: maestro@maestro</p>
                <p class="">pass: maestro</p>
                <p class="">Alumnos</p>
                <p class="">user: alumno@alumno</p>
                <p class="">pass: alumno</p>

                <p class="">Cuando cree un alumno o maestro nuevo la contraseña por defecto es igual al correo electronico</p>
            </div>
        </div>
    </main>
    
    <?php
            $pass = password_hash("alumno", PASSWORD_DEFAULT);

            //echo "<h1>". $pass ."</h1>";
        ?>



</body>

</html>