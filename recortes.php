<h2>Materias disponibles</h2>

<form action="register_matter_multiple" method="post">
    <label for="id_clase">Escoge tus clases</label>
    <select name="id_clase" id="id_clase">
    <?php 
    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");
    $id_usuario_alumno = $_SESSION['sesion']['id_usuario'];

    $stmnt = $mysqli->query("select c.id_clase, c.nombre_clase  from clases c left join inscripciones i on c.id_clase = i.id_clase and i.id_usuario_alumno = '$id_usuario_alumno' where i.id_inscripcion is null");
    var_dump( $stmnt);
    
    foreach($stmnt as $key => $faltante){  ?>
        <option value="<?= $faltante['id_clase'] ?>" ?>
            <?= $stmnt["nombre_clase"] ?>
        </option>

    <?php    
    }
    ?>


    </select>
    <button type="submit">Inscribirse</button>
</form>