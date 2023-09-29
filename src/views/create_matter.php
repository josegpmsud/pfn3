<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

<section class="bg bg-orange-200 rounded-md gap-3 w-96 p-6 shadow-lg hover:shadow-xl">
    <form action="/src/handle_db/matter/create_matter.php" method="post"
        class="flex flex-col bg bg-orange-200 rounded-md gap-3">
        <h1 class="text-3xl font-bold underline">Agregar clase</h1>

        <div class="">
            <label for="nombre_clase" class=""> Nombre de la materia </label><br>
            <input class="" type="nombre_clase" name="nombre_clase" placeholder="Ingresa nombre materia">
        </div>
        <div class="">
            <label for="id_usuario_maestro" class=""> Maestro para la clase </label>
            <select name="id_usuario_maestro" id="id_usuario_maestro" class="rounded-md">

                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

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
            <button class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded"
                type="submit">Crear</button>
        </div>
    </form>
</section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>