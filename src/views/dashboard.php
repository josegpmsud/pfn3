<?php require_once("../section/header.php");?>

<body class="w-screen flex gap-3">

    <?php require_once("../section/aside.php"); ?>

    <section>

        <?php require_once("../section/nav.php"); ?>
        <main>
            <h1>Dashboard</h1>
            <section>
                <h2>Bienvenido</h2>
                <p>Selecciona la accion que quieras realizar en las pestañas del menu de la izquierda</p>
            </section>
            <?php
    echo $_SESSION['sesion']['email'];
    echo $_SESSION['sesion']['nombre'];
    echo $_SESSION['sesion']['apellido'];
    echo $_SESSION['sesion']['id_rol'];

    ?>

        </main>


    </section>