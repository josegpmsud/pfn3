<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

        <main>
            <h1>Lista de Permisos</h1>
            <section>
                <h2>Informacion de Permisos</h2>
                <p></p>
            </section>
            
            <table class="table-show">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Email/Usuario</td>
                        <td>Permiso</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM usuarios u inner join roles r on u.id_rol = r.id_rol");

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
                    $descripcion = $row["descripcion"];

                    if($estado){
                        $estado_d = "Activo";
                    }else{ $estado_d = "Inactivo";}
            
                
                    echo "              
                                        
                    
                    <tr class=''>                        
                        <td>$id_usuario</td>                        
                        <td>$email</td>
                        <td>$descripcion </td>                        
                        <td>$estado_d</td>
                        <td>
                        <form action='./edit_permission.php' method='post'>
                        <input name='id_usuario' hidden type='text' value='$id_usuario'>
                        <input name='descripcion' hidden type='text' value='$descripcion'>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                                edit_square
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