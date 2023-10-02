
<aside class="w-64  bg-[#353A40] text-white rounded-md m-2 p-6">
    <section class="w-full flex items-center border-solid border-b-2 p-2  border-white gap-4">
        <div class="rounded-md">
            <img class="w-10 h-10 rounded-md" src="/assets/ico.jpg" alt="lg">
        </div>
        <h1>
            Universidad
        </h1>
    </section>
    <section class="w-full border-solid border-b-2 p-2  border-white">
        <h1><?= ucwords($_SESSION['sesion']['descripcion']);?></h1>
        <p><?= $_SESSION['sesion']['nombre']; ?></p>
        <?php $id_usuario = $_SESSION['sesion']['id_usuario'];?>

        

    </section>
    <?php if($_SESSION['sesion']['id_rol'] == 1){
    echo "
    <section>
    <br>
    <h2 class='text-xs'>MENU ADMINISTRACIÓN</h2>
    <br>
    <p ><a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/permissions.php'><span class='material-symbols-outlined'>
    manage_accounts
</span> Permisos</a></p>
<br>
    <p><a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/teachers.php'><span class='material-symbols-outlined'>
    supervisor_account
</span> Maestros</a></p>
<br>
    <p><a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/students.php'><span class='material-symbols-outlined'>
    school
</span> Alumnos</a></p>
<br>
    <p><a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/matters.php'><span class='material-symbols-outlined'>
    co_present
</span> Clases</a></p>
    </section>    
    ";
    } 
    ?>

    <?php if($_SESSION['sesion']['id_rol'] == 2){
    echo "
    <section>
        <h1>MENU MAESTROS</h1>
        <br>
        <p>
            <a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/teacher_matters.php'><span class='material-symbols-outlined'>
            co_present
        </span> Clases</a>
        </p>        
        <br>
        <p>
        <form action='/src/views/edit_user.php' method='post'>
        <input name='id_usuario' hidden type='text' value='$id_usuario'>
        <button class='hover:bg-violet-600 flex items-center gap-4' type='submit'>
            <span class='material-symbols-outlined'>
                manage_accounts
            </span>
            Editar perfil
        </button>
        </form>
        </p>
    
        </section>
    ";
    } 
    ?>

    <?php if($_SESSION['sesion']['id_rol'] == 3){
    echo "
    <section>
    <h1>MENU ALUMNOS</h1>
    <br>
    <p><a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/student_qualifications.php'><span class='material-symbols-outlined'>
    task
</span> Ver Calificaciones</a></p>
        <br>
    <p><a class='hover:bg-violet-600 flex items-center gap-4' href='/src/views/student_matters_multiple.php'><span class='material-symbols-outlined'>
    co_present
</span> Administra tus Clases</a>
        
        </p>
        <br>
    <p>
        <form action='/src/views/edit_user.php' method='post'>
        <input name='id_usuario' hidden type='text' value='$id_usuario'>
        <button class='hover:bg-violet-600 flex items-center gap-4' type='submit'>
            <span class='material-symbols-outlined'>
                manage_accounts
            </span>
            Editar perfil
        </button>
        </form>
    </p>
    
    
    </section>
    ";
    } 
    ?>
                        
                        
                        




</aside>