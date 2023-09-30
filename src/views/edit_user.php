<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>


<?php
        
        $id_usuario = $_POST["id_usuario"];
        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
        $result = $stmnt->fetch_assoc();
    ?>
        
    <section class=" bg-orange-200 rounded-md gap-3 w-96 p-6 shadow-lg hover:shadow-xl">
            <form action="/src/handle_db/edit_user.php" method="post">

                <h1>Editar 
                    <?php
                    if($result['id_rol']==2){echo "Maestro";}
                    if($result['id_rol']==3){echo "Alumno";}
                    ?>
                </h1>                
                 
                <br>
                
                <input hidden type="text" name="id_usuario"  value="<?= $result['id_usuario']?>">
                

                <label class="" for="dni">DNI</label><br>
                <input class="" id="dni" type="text" name="dni" placeholder="Ingresa DNI" value="<?= $result['dni']?>">
                
                
                <br> <br>

                <label class="" for="email">Correo Electronico</label><br>
                <input class="" id="email" type="text" name="email" placeholder="Ingresa Email" value="<?= $result['email']?>">

                <?php if($_SESSION['sesion']['id_rol'] != 1){?>
                <br> <br>

                <label class="" for="contrasena">Contraseña: ingresa para cambiar contraseña</label><br>
                <input class="" id="contrasena" type="password" name="contrasena" placeholder="Para cambiar ingresa una nueva contraseña" >
                
                <?php }?>
                
                <br> <br>

                <label class="" for="nombre">Nombre(s)</label><br>
                <input class="" id="nombre" type="text" name="nombre" placeholder="Ingresa nombre(s)" value="<?= $result['nombre']?>">

                <br> <br>

                <label class="" for="apellido">Apellidos(s)</label><br>
                <input class=""  id="apellido" type="text" name="apellido" placeholder="Ingresa apellido(s)." value="<?= $result['apellido']?>">

                <br> <br>


                <label class="" for="direccion">Dirección</label><br>
                <input class="" id="direccion" type="text" name="direccion" placeholder="Ingresa la dirección" value="<?= $result['direccion']?>">

                <br> <br>

                <label class="" for="fecha_nac">Fecha de nacimiento</label><br>
                <input class="" id="fecha_nac" type="date" name="fecha_nac"  placeholder="mm/dd/yyyy" value="<?= $result['fecha_nac']?>">

                <br> <br>


                <a href="#">Close</a>
                <button class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded text-white" type="submit">Guardar cambios</button>


            </form>
        </section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>