<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>University</title>
</head>

<body class="bg-[#FFF5D2] ">
   
    <main class="w-screen flex justify-center">
        <div class="flex flex-col items-center gap-6">
            <div class="h-80">
                <img src="/assets/logo.jpg" alt="logo" class="h-full">
            </div>
            <section class="h-60 w-full flex justify-center flex-col items-center bg-slate-50  rounded-md shadow-lg hover:shadow-xl">
                
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
                <form class="" action="/src/handle_db/login.php" method="post">
                    <div class="">
                    <br>
                    <div class="flex items-center border-neutral-300">
                        
                        <input class="" type="email" placeholder="Email" name="email" autofocus require>
                        <span class="material-symbols-outlined"> mail </span>
                        
                    </div>
                    <br>
                    <div class="flex items-center">
                        
                        <input class="" type="password" placeholder="Password" name="contrasena" require>
                        <span class="material-symbols-outlined"> lock </span>
                    
                    </div>
                    <br>
                    <div class="">
                        <button class="bg-[#007CFE] text-white w-32 h-10 rounded-md" type="submit">Ingresar</button>
                    </div>
                </div>
                </form>



                
                
                
            </section>
            
            <div class="w-60 bg-white p-5">
                <p class="">Información de Acceso</p>
                <hr>
                <p class="">Admin</p>
                <p class="">user: admin@admin</p>
                <p class="">pass: admin</p>
                <hr>
                <p class="">Maestros</p>
                <p class="">user: maestro@maestro</p>
                <p class="">pass: maestro</p>
                <hr>
                <p class="">Alumnos</p>
                <p class="">user: alumno@alumno</p>
                <p class="">pass: alumno</p>
                <hr>
                <p class="">Nota: Cuando cree un alumno o maestro nuevo la contraseña por defecto es igual al Email</p>
            </div>
        </div>
    </main>
    
    


</body>

</html>