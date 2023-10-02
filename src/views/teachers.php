<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
        <div>
            <a class="bg-green-500 hover:bg-green-700 active:scale-110 font-bold py-2 px-4 rounded text-white"
                href="/src/views/create_teacher.php">Agregar Maestro</a>

        </div>

    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Lista de Maestros
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Informacion de Maestros</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        DNI
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Nombre
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Correo
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Dirección
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Fec. de Nacimiento
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Clases Asignadas
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Acciones
                    </div>
                </th>


            </tr>
        </thead>
        <tbody>

            <?php 

require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

$stmnt = $mysqli->query("SELECT * FROM usuarios where id_rol = 2");
$total = 0;
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
        <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                
                <td class='px-6 py-4'>
                $id_usuario
                </td>
                <td class='px-6 py-4'>
                $dni
                </td>
                <td class='px-6 py-4'>
                $nombre $apellido
                </td>
                <td class='px-6 py-4'>
                $email
                </td>
                <td class='px-6 py-4'>
                $direccion
                </td>
                <td class='px-6 py-4'>";
                $fecha_nac;
                $timestamp = strtotime($fecha_nac); 
                $newDate = date("d-m-Y", $timestamp); 
                echo $newDate;                

                echo"
                </td>

                <td class='px-6 py-4'>";
                $stmnt2 = $mysqli->query("SELECT * FROM clases where id_usuario_maestro = '$id_usuario'");
                        
                        $cont = 0;
                        while($row2 = $stmnt2->fetch_assoc()){
                            $cont ++;
                        }
                        
                        if($cont>0){
                            echo $cont;
                        }else{
                            echo "<span class='bg-yellow-300 rounded-md p-1 '>Sin Asignación</span>";
                        } 
                        
                
                
                
                
                
                echo "
                </td>
                <td class='px-6 py-4 text-center'>
                <form action='/src/views/edit_user.php' method='post'>
                <input name='id_usuario' hidden type='text' value='$id_usuario'>
                <button type='submit'>
                    <span class='material-symbols-outlined text-blue-600 dark:text-blue-500'>
                        edit_square
                    </span>
                </button>
                </form>";
                
                if($cont==0){
                echo"
                <form action='/src/handle_db/delete_user.php' method='post'>
                <input name='id_usuario' hidden type='text' value='$id_usuario'>
                <button type='submit'>
                    <span class='material-symbols-outlined text-red-600 dark:text-red-500'>
                        delete
                    </span>
                </button>
                </form>";}
                echo "   
                        
                </td>
                </tr>                   
                ";
                $total++;
        }

    ?>


        </tbody>
        <tfoot>
            <tr class="font-semibold  text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-3 text-base ">Total</th>
                <td class="px-6 py-3 text-base"><?= $total?></td>
            </tr>
        </tfoot>
    </table>
</div>



<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>