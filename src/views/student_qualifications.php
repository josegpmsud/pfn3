<?php require_once("../section/header.php");?>

<body class="w-screen flex gap-3">

    <?php require_once("../section/aside.php"); ?>

    <section>

        <?php require_once("../section/nav.php"); ?>
        <main>
            <h1>Calificaciones y mensajes de tus clases</h1>
            <section>
                <h2>Calificaciones y mensajes de tus clases</h2>
                <p></p>
            </section>

            <table class="table-show">
                <thead>
                    <tr>
                        <td>#</td>                        
                        <td>Nombre de la clase</td>
                        <td>Calificación</td>
                        <td>Mensajes</td>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
                $id_usuario_alumno = $_SESSION['sesion']['id_usuario'];

                $stmnt = $mysqli->query("SELECT * FROM clases c inner join inscripciones i on i.id_clase = c.id_clase where id_usuario_alumno = '$id_usuario_alumno'");

                while($row = $stmnt->fetch_assoc()){
                    $id_clase = $row["id_clase"];                    
                    $nombre_clase = $row["nombre_clase"];                                 
                    $nota_alumno = $row["nota_alumno"];
                    $mensaje = $row["mensaje"];
                    
                                
                
                    echo "              
                                        
                    
                    <tr class=''>                        
                        <td>$id_clase</td>                        
                        <td>$nombre_clase</td>                                             
                        <td>$nota_alumno</td>
                        <td>$mensaje</td>                        
                        </tr>                   
                        ";
                }

            ?>
                </tbody>


            </table>

        </main>


    </section>