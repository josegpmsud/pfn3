<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/ini.php");?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Calificaciones y mensajes de tus clases
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Calificaciones y mensajes de tus clases</p>
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                    Nombre de la clase
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                    Calificación
                        <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>
                                
                
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                    Mensajes                        
                    </div>
                </th>
                
                
            </tr>
        </thead>
        <tbody>

        <?php 


require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
$total = 0;
$id_usuario_alumno = $_SESSION['sesion']['id_usuario'];

                $stmnt = $mysqli->query("SELECT * FROM clases c inner join inscripciones i on i.id_clase = c.id_clase where id_usuario_alumno = '$id_usuario_alumno'");

                while($row = $stmnt->fetch_assoc()){
                    $id_clase = $row["id_clase"];                    
                    $nombre_clase = $row["nombre_clase"];                                 
                    $nota_alumno = $row["nota_alumno"];
                    $mensaje = $row["mensaje"];
                    
                    
    echo " 
        <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                
                <td class='px-6 py-4'>
                $id_clase
                </td>
                <td class='px-6 py-4'>
                $nombre_clase
                </td>
                <td class='px-6 py-4'>
                $nota_alumno
                </td>
                <td class='px-6 py-4'>
                $mensaje
                </td>
                
                
                
                </tr>                   
                </form>";
                $total++;
        }

    ?>
            
            
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3"><?= $total?></td>                
            </tr>
        </tfoot>
    </table>    
</div>


<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/src/section/fin.php");?>