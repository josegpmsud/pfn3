## Por implementar o mejorar

- confirmacion antes de eliminacion

- dejar mensajes al usuario (cuando intenta hacer algo no permitido)

- validar formularios para que no ingresen caracteres especiales si no se require

- validar que no se pueda cambiar el rol de un maestro o alumno que ya tenga clases asignadas

- mejorar estilos 

- formatear codigo en php

- otros por identificar


## Consideraciones ya adicionales implementadas en el sistema:


- Activar o desactivar a un usuario en el panel de administrador (quiere decir que si un usuario ha sido desactivado, no debería poder acceder con sus credenciales hasta que sea activado nuevamente).

- El admin puede ver la cantidad de alumnos inscritos en cada clase.

- Cada maestro pueder ver sus clases y calificar a los alumnos y dejar un mensaje

- Cada maestro puede Crear, Leer, Actualizar y Borrar calificaciones y comentarios de sus alumnos.

- El alumno puede ver en la pestaña "Ver Calificaciones" un mensaje dejado por el maestro y la calificación de cada curso.

- Desarrollar toda la interfaz del usuario (UI) desde cero.

- DarkMode en tablas y algunos elementos

- Una maestro puede estar asignado a varias clases

- Eliminar maestros requiere que dicho maestro no tenga clases asignados.

- Eliminar clases requiere que dicho clase no tenga alumnos inscritos.

- Eliminar alumno requiere que dicho alumno no tenga clases inscritas.(primero debe retirar materias)

- otros por descubrir jeje.


# Base de datos:
- universidad_db

## TABLAS

### usuarios:

- id_usuario(PK)
- dni
- email
- contrasena
- nombre
- apellido
- direccion
- fecha_nac
- estado(activo:si/no)
- id_rol(FK)


### roles:

- id_rol
- descripcion(administrador(1), maestro(2), alumno(3))


### clases:

- id_clase(PK)
- nombre_clase
- id_usuario_maestro(FK)


### incripciones

- id_inscripcion(PK)
- id_clase(FK)
- id_usuario_alumno(FK)
- nota_alumno
- mensaje




# reinstalar paso 4  tailwind css

npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch

# hash contraseñas

<?php
            $pass = password_hash("alumno", PASSWORD_DEFAULT);

            //echo "<h1>". $pass ."</h1>";
        ?>


