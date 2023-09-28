<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

        <main>
            <h1>Lista de Clases</h1>
            <section>
                <h2>Informacion de Clases</h2>
                <a href="./create_matter.php">Agregar Clase</a>
            </section>

            <table class="table-show">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Clase</td>
                        <td>Maestro</td>
                        <td>Alumnos Inscritos</td>                        
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM clases c inner join usuarios u on c.id_usuario_maestro = u.id_usuario where u.id_rol = 2");

                while($row = $stmnt->fetch_assoc()){
                    $id_clase = $row["id_clase"];
                    $nombre_clase = $row["nombre_clase"];
                    $nombre = $row["nombre"];
                    $apellido = $row["apellido"];
                    
                    $id_usuario = $row["id_usuario"];
                    $dni = $row["dni"];
                    $email = $row["email"];
                    $contrasena = $row["contrasena"];
                    $direccion = $row["direccion"];
                    $fecha_nac = $row["fecha_nac"];
                    $estado = $row["estado"];
                    $id_rol = $row["id_rol"];
                    
                                
                
                    echo "              
                                        
                    
                    <tr class=''>                        
                        <td>$id_clase</td>  
                        <td>$nombre_clase</td>
                        <td>$nombre $apellido</td>                                             
                        <td></td>                        
                        <td>
                        <form action='./edit_matter.php' method='post'>
                        <input name='id_clase' hidden type='text' value='$id_clase'>
                        <input name='nombre_maestro' hidden type='text' value='$nombre $apellido'>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                                edit_square
                            </span>
                        </button>
                        </form>
                        
                        <form action='../handle_db/teacher/delete_teacher.php' method='post'>
                        <input name='id_clase' hidden type='text' value='$id_clase'>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </button>
                        </form>
                            
                        </td>
                        </tr>                   
                        ";
                }
            ?>
                </tbody>
            </table>

        </main>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>