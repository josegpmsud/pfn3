<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

<?php $id_clase = $_POST['id_clase'] ?>
<?php $nombre_maestro = $_POST['nombre_maestro'] ?>
<?php
               
        require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
        $stmnt = $mysqli->query("SELECT * FROM clases WHERE id_clase='$id_clase'");
        $result = $stmnt->fetch_assoc();

        $nombre_clase =  $result['nombre_clase'];
        $id_usuario_maestro =  $result['id_usuario_maestro'];  
    ?>

<section class="bg bg-orange-200 rounded-md gap-3 w-96 p-6 shadow-lg hover:shadow-xl">
    <form action="/src/handle_db/matter/edit_matter.php" method="post"
        class="flex flex-col bg bg-orange-200 rounded-md gap-3">

        <h1 class="text-3xl font-bold underline">Editar clase</h1>
        <input class="" hidden type="text" name="id_clase" value="<?= $id_clase?>">

        <div class="">
            <label for="nombre_clase" class=""> Nombre de la materia </label><br>
            <input class="" type="text" name="nombre_clase" placeholder="Ingresa nombre materia"
                value="<?= $nombre_clase?>">
        </div>
        <div class="">
            <label for="id_usuario_maestro" class=""> Maestro para la clase </label>
            <select name="id_usuario_maestro" id="id_usuario_maestro" class="rounded-md">

                <?php
                    
                    if($id_usuario_maestro != 0){
                        echo "<option class='' value='$id_usuario_maestro'>$nombre_maestro</option>";

                    }
                    

                    echo "<option class='' value='0'>Por asignar</option>";
                    $stmnt = $mysqli->query("SELECT * FROM usuarios where id_rol = 2");
                     var_dump($stmnt);                  
                    while($row = $stmnt->fetch_assoc()){
                        $id_usuario = $row["id_usuario"];
                        $nombre = $row["nombre"];
                        $apellido = $row["apellido"];
                        echo "<option class='' value='$id_usuario'>$nombre $apellido</option>";
                    }
                    ?>
            </select>
        </div>


        <div class="">
            <button class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded text-white"
                type="submit">Guardar cambios</button>
        </div>
    </form>
</section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>