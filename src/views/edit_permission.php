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
    <form action="/src/handle_db/permission/edit_permission.php" method="post"
        class="flex flex-col bg bg-orange-200 rounded-md gap-3">

        <h1 class="text-3xl font-bold underline">Editar Permiso</h1>
        <input class="" hidden type="text" name="id_usuario" value="<?= $id_usuario?>">

        <div class="">
            <label for="email" class=""> Email del usuario</label><br>
            <input class="" type="email" name="email" placeholder="Ingresa email" value="<?= $email?>">
        </div>
        <div class="">
            <label for="id_rol" class=""> Rol del usuario </label>
            <select name="id_rol" id="id_rol" class="rounded-md">

                <?php
                    echo "<option class='' value='$id_rol'>$descripcion</option>";

                    $stmnt = $mysqli->query("SELECT * FROM roles");
                                      
                    while($row = $stmnt->fetch_assoc()){
                        $id_rol = $row["id_rol"];
                        $descripcion = $row["descripcion"];
                        
                        echo "<option class='' value='$id_rol'>$descripcion</option>";
                    }
                    ?>
            </select>
        </div>

        <div>
            <label for="estado">Acceso Usuario</label>
            <select name="estado" id="estado" class="rounded-md">
                <option class='' value='<?= $estado?>'>
                    <?php if($estado == 1){echo "Activar";}elseif($estado == 0){echo "Desactivar";}?>
                </option>
                <?php 
                            if($estado == 1){
                                echo "<option class='' value='0'>Desactivar</option>";
                            }else{
                                echo "<option class='' value='1'>Activar</option>";
                            }                        
                        
                        ?>

            </select>
        </div>

        <div class="">
        <a class="bg-slate-500  hover:bg-slate-800  active:scale-110 font-bold py-2 px-4 rounded text-white" href="<?=$_SERVER["HTTP_REFERER"]?>">Close</a>

            <button class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded text-white"
                type="submit">Guardar cambios</button>
        </div>
    </form>
</section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>