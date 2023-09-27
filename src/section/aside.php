<?php
session_start()
?>
<aside>
    <section class="w-full">
        <div>
            <img class="w-10 h-10" src="../../assets/logo.jpg" alt="lg">
        </div>
        <h1>
            Universidad
        </h1>
    </section>
    <section>
        <h1><?= $_SESSION['sesion']['nombre']; ?></h1>
        <p><?= $_SESSION['sesion']['id_rol'];?></p>

    </section>
    <section>
        <h1>MENU <?= $_SESSION['sesion']['id_rol']; ?></h1>
        <p><span class="material-symbols-outlined">
                manage_accounts
            </span><a href="../views/permissions.php">Permisos</a></p>
        <p><span class="material-symbols-outlined">
                supervisor_account
            </span>Maestros</p>
        <p><span class="material-symbols-outlined">
                school
            </span>Alumnos</p>
        <p><span class="material-symbols-outlined">
                co_present
            </span>Clases</p>

    </section>
</aside>