<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

        <main>
            <h1>Lista de Maestros</h1>
            <section>
                <h2>Informacion de Maestros</h2>
                <a href="/src/views/create_teacher.php">Agregar Maestro</a>
            </section>

            <table class="">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>DNI</td>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Dirección</td>
                        <td>Fec. de Nacimiento</td>
                        <td>Clases Asignadas</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

                $stmnt = $mysqli->query("SELECT * FROM usuarios where id_rol = 2");

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
                        <td>";
                        
                        
                        $stmnt2 = $mysqli->query("SELECT * FROM clases where id_usuario_maestro = '$id_usuario'");
                        
                        $cont = 0;
                        while($row2 = $stmnt2->fetch_assoc()){
                            $cont ++;
                        }
                        
                        if($cont>0){
                            echo $cont;
                        }else{
                            echo "<span>Sin clases</span>";
                        } 
                        
                        
                        echo "
                        </td>
                        <td>
                        <form action='/src/views/edit_user.php' method='post'>
                        <input name='id_usuario' hidden type='text' value='$id_usuario'>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                                edit_square
                            </span>
                        </button>
                        </form>";
                        
                        if($cont==0){
                        echo"
                        <form action='/src/handle_db/teacher/delete_teacher.php' method='post'>
                        <input name='id_usuario' hidden type='text' value='$id_usuario'>
                        <button type='submit'>
                            <span class='material-symbols-outlined'>
                                delete
                            </span>
                        </button>
                        </form>";}
                        echo "   
                        </td>
                        </tr>                   
                        ";
                }

            ?>
                

                </tbody>


            </table>

        </main>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>