<?php require_once("../section/header.php");?>

<body class="w-screen flex gap-3">

    <?php require_once("../section/aside.php"); ?>

    <section>

        <?php require_once("../section/nav.php"); ?>
        <main>
            <h1>Lista de Alumnos</h1>
            <section>
                <h2>Informacion de Alumnos</h2>
                <p></p>
            </section>

            <table class="table-show">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>DNI</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Dirección</td>
                        <td>Fec. de Nacimiento</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM usuarios where id_rol = 3");

                while($row = $stmnt->fetch_assoc()){
                    $id_usuario = $row["id_usuario"];
                    $dni = $row["dni"];
                    $email = $row["email"];
                    $contrasena = $row["contrasena"];
                    $nombre = $row["nombre"];
                    $apellido = $row["apellido"];
                    $direccion = $row["direccion"];
                    $fecha_nac = $row["fecha_nac"];
                    $estado = $row["estado"];
                    $id_rol = $row["id_rol"];
                    
                                
                
                    echo "              
                                        
                    
                    <tr class=''>                        
                        <td>$id_usuario</td>  
                        <td>$dni</td>
                        <td>$nombre $apellido</td>                                             
                        <td>$email</td>
                        <td>$direccion </td>                        
                        <td>$fecha_nac</td>
                        <td>
                            <span class='material-symbols-outlined'>
                                edit_square
                            </span>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </td>
                        </tr>                   
                        ";
                }

            ?>
                </tbody>


            </table>

        </main>


    </section>