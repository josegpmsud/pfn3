<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>
    
    <?php $id_usuario = $_POST['id_usuario'] ?>
    <?php $descripcion = $_POST['descripcion'] ?>
    <?php
               
        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
        $result = $stmnt->fetch_assoc();

        $email =  $result['email'];
        $id_rol =  $result['id_rol'];
        $estado =  $result['estado'];  
    ?>
        
    <section class="bg bg-orange-200 rounded-md gap-3 w-96 p-6 shadow-lg hover:shadow-xl">
            <form action="/src/handle_db/matter/edit_permission.php" method="post" class="flex flex-col bg bg-orange-200 rounded-md gap-3">
                
                <h1 class="text-3xl font-bold underline">Editar Permiso</h1>
                <input class="" hidden type="text" name="id_usuario" value="<?= $id_usuario?>" >
                
                <div class="">
                    <label for="email" class=""> Email del usuario</label><br>
                    <input class="" type="text" name="email" placeholder="Ingresa email" value="<?= $email?>">
                </div>
                <div class="">
                    <label for="id_usuario_maestro" class=""> Rol del usuario </label>
                    <select name="id_rol" id="id_rol" class="rounded-md">

                        <?php
                    echo "<option class='' value='$id_rol'>$descripcion</option>";

                    $stmnt = $mysqli->query("SELECT * FROM roles");
                     //var_dump($stmnt);                  
                    while($row = $stmnt->fetch_assoc()){
                        $id_rol = $row["id_rol"];
                        $descripcion = $row["descripcion"];
                        
                        echo "<option class='' value='$id_rol'>$descripcion</option>";
                    }
                    ?>
                    </select>
                </div>

                <div>
                    <input type="checkbox" id="estado" name="estado" value="<?= $estado?>">
                    <label for="estado">Usuario activo</label>
                </div>


                <div class="">
                    <button
                        class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded"
                        type="submit">Guardar cambios</button>
                </div>
            </form>
        </section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>