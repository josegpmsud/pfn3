<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

        <main>
            <h1>Lista de Clases de <?= $_SESSION['sesion']['nombre'] ." ". $_SESSION['sesion']['nombre'] ;?> </h1>
            <section>
                <h2>Informacion de Clases</h2>
                <p></p>
            </section>

            <table class="table-show">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Clase</td>                        
                        <td>Alumnos Inscritos</td>                        
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
                $maestro = $_SESSION['sesion']['id_usuario'];

                $stmnt = $mysqli->query("SELECT * FROM clases c inner join usuarios u on c.id_usuario_maestro = u.id_usuario where u.id_rol = 2 and u.id_usuario = '$maestro'");

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
                                                                 
                        <td>";
                        
                        
                        
                        
                        $stmnt2 = $mysqli->query("SELECT * FROM usuarios u inner join inscripciones i on u.id_usuario = i.id_usuario_alumno where id_clase = '$id_clase'");
                        
                        $cont = 0;
                        while($row2 = $stmnt2->fetch_assoc()){
                           
                            $cont ++;
                        }
                        echo $cont;
                        
                        echo"
                        
                        </td>                        
                        <td>
                            <a href='/src/views/teacher_students.php?id_clase=$id_clase'>
                                <span class='material-symbols-outlined'>
                                    edit_square
                                </span> 
                            </a>    
                        
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


<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>


    