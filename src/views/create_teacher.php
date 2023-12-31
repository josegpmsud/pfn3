<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

<section class=" bg-orange-200 rounded-md gap-3 w-96 p-6 shadow-lg hover:shadow-xl">
    <form action="/src/handle_db//teacher/create_teacher.php" method="post" enctype="multipart/form-data">

        <h1 class="text-3xl font-bold underline">Agregar Maestro</h1>

        <input type="text" hidden name="id_rol" id="id_rol" value="2">

        <label class="" for="dni">DNI</label><br>
        <input type="text" name="dni" id="dni" placeholder="Ingrese la DNI" required>

        <br> <br>

        <label class="" for="email">Correo Electronico</label><br>
        <input class="" id="email" type="text" name="email" placeholder="Ingresa Email" required>

        <br> <br>

        <label class="" for="nombre">Nombre(s)</label><br>
        <input class="" id="nombre" type="text" name="nombre" placeholder="Ingresa nombre(s)" required>

        <br> <br>

        <label class="" for="apellido">Apellidos(s)</label><br>
        <input class="" id="apellido" type="text" name="apellido" placeholder="Ingresa apellido(s)." required>

        <br> <br>


        <label class="" for="direccion">Dirección</label><br>
        <input class="" id="direccion" type="text" name="direccion" value="" placeholder="Ingresa la dirección" required>

        <br> <br>

        <label class="" for="fecha_nac">Fecha de nacimiento</label><br>
        <input class="" id="fecha_nac" type="date" name="fecha_nac" placeholder="mm/dd/yyyy" required>

        <br> <br>


        <a class="bg-slate-500  hover:bg-slate-800  active:scale-110 font-bold py-2 px-4 rounded text-white" href="<?=$_SERVER["HTTP_REFERER"]?>">Close</a>

        <button class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded text-white"
            type="submit">Crear</button>


    </form>
</section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>