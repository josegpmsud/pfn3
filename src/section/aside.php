
<aside class="bg-slate-500 text-white">
    <section class="w-full flex">
        <div>
            <img class="w-10 h-10" src="../../assets/logo.jpg" alt="lg">
        </div>
        <h1>
            Universidad
        </h1>
    </section>
    <section>
        <h1><?= ucwords($_SESSION['sesion']['descripcion']);?></h1>
        <p><?= $_SESSION['sesion']['nombre']; ?></p>

    </section>
    <?php if($_SESSION['sesion']['id_rol'] == 1){
    echo "
    <section>
    <h1>MENU ADMINISTRACIÓN</h1>
    <p><span class='material-symbols-outlined'>
            manage_accounts
        </span><a href='../views/permissions.php'>Permisos</a></p>
    <p><span class='material-symbols-outlined'>
            supervisor_account
        </span><a href='../views/teachers.php'>Maestros</a></p>
    <p><span class='material-symbols-outlined'>
            school
        </span><a href='../views/students.php'>Alumnos</a></p>
    <p><span class='material-symbols-outlined'>
            co_present
        </span><a href='../views/matters.php'>Clases</a></p>
    </section>    
    ";
    } 
    ?>

    <?php if($_SESSION['sesion']['id_rol'] == 2){
    echo "
    <section>
    <h1>MENU MAESTROS</h1>
    <p><span class='material-symbols-outlined'>
            school
        </span><a href='../views/students.php'>Alumnos</a></p>
    <p><span class='material-symbols-outlined'>
            co_present
        </span><a href='../views/matters.php'>Clases</a></p>        
    </section>
    ";
    } 
    ?>

    <?php if($_SESSION['sesion']['id_rol'] == 3){
    echo "
    <section>
    <h1>MENU ALUMNOS</h1>
    <p><span class='material-symbols-outlined'>
        task
    </span><a href='../views/students.php'>Ver Calificaciones</a></p>
    <p><span class='material-symbols-outlined'>
            co_present
        </span><a href='../views/matters.php'>Administra tus Clases</a></p>
    </section>
    ";
    } 
    ?>


</aside>