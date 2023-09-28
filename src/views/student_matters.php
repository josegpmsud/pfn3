<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

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
                        <td>Materia</td>
                        <td>Darse de baja</td>                                      
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
                    
                    
                                
                
                    echo "              
                                        
                    
                    <tr class=''>                        
                        <td>$id_clase</td>                        
                        <td>$nombre_clase</td>                                             
                        <td>
                        <form action='../handle_db/student/remove_matter.php' method='post'>
                        <input name='id_clase' hidden type='text' value='$id_clase'>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                               remove_selection
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

            <table class="table-show">
                <thead>
                    <tr>
                        <td>#</td>                        
                        <td>Materia</td>
                        <td>Inscribir</td>                                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
                $id_usuario_alumno = $_SESSION['sesion']['id_usuario'];

                $stmnt = $mysqli->query("select c.id_clase, c.nombre_clase  from clases c left join inscripciones i on c.id_clase = i.id_clase and i.id_usuario_alumno = 3 where i.id_incripcion is null");

                while($row = $stmnt->fetch_assoc()){
                    $id_clase = $row["id_clase"];                    
                    $nombre_clase = $row["nombre_clase"];                     
                    echo " 
                    <tr class=''>                        
                        <td>$id_clase</td>                        
                        <td>$nombre_clase</td>                                             
                        <td>
                        <form action='../handle_db/student/register_matter.php' method='post'>
                        <input name='id_clase' hidden type='text' value='$id_clase'>
                        <button type='submit'>
                        <span class='material-symbols-outlined'>
                        beenhere
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