<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

        <section class="cont-edit">
            <form action="../handle_db//teacher/create_teacher.php" method="post" enctype="multipart/form-data">

                <h1>Agregar Maestro</h1>                
                
                <input type="text" hidden name="id_rol" id="id_rol" value="2">

                <label class="" for="dni">DNI</label><br>
                <input type="text"   name="dni" id="dni" placeholder="Ingrese la DNI">

                <br> <br>

                <label class="" for="email">Correo Electronico</label><br>
                <input class="" id="email" type="text" name="email" placeholder="Ingresa Email">

                <br> <br>

                <label class="" for="nombre">Nombre(s)</label><br>
                <input class="" id="nombre" type="text" name="nombre" placeholder="Ingresa nombre(s)">

                <br> <br>

                <label class="" for="apellido">Apellidos(s)</label><br>
                <input class=""  id="apellido" type="text" name="apellido" placeholder="Ingresa apellido(s).">

                <br> <br>


                <label class="" for="direccion">Dirección</label><br>
                <input class="" id="direccion" type="text" name="direccion" value="" placeholder="Ingresa la dirección">

                <br> <br>

                <label class="" for="fecha_nac">Fecha de nacimiento</label><br>
                <input class="" id="fecha_nac" type="date" name="fecha_nac"  placeholder="mm/dd/yyyy">

                <br> <br>


                <a href="">Close</a>
                <button class="" type="submit">Crear</button>


            </form>
        </section>

<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>