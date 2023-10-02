<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

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
                        <td>Nombre de alumno</td>
                        <td>Calificación</td>
                        <td>Mensajes</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
                $id_clase = $_POST['id_clase'];
                $id_clase2 = $_POST['id_clase'];

                $stmnt = $mysqli->query("SELECT * FROM usuarios u inner join inscripciones i on u.id_usuario = i.id_usuario_alumno where id_clase = '$id_clase'");

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
                    $id_inscripcion = $row["id_inscripcion"];
                    $nota_alumno = $row["nota_alumno"];
                    $mensaje = $row["mensaje"];
                    
                                
                
                    echo "              
                                        
                    
                    <tr class=''>                        
                        <td>$id_usuario</td>                        
                        <td>$nombre $apellido</td>                                             
                        <td>


                        <form action='../handle_db/student/edit_qualification.php' method='post'>

                        <input hidden name='id_clase'  type='text' value='$id_clase2'>

                        <input hidden name='id_inscripcion'  type='text' value='$id_inscripcion'>

                        <input name='nota_alumno'  type='text' value='$nota_alumno'>
                                                
                        </td>
                        
                        <td>
                        <input name='mensaje'  type='text' value='$mensaje'>
                                                
                        </td>                        
                                                
                        <td>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                                edit_square
                            </span>
                        </button>
                        <span class='material-symbols-outlined'>
                        delete
                        </span>
                        </td>
                        </tr>                   
                        
                        </form>";
                    }

            ?>
                </tbody>


            </table>

        </main>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>