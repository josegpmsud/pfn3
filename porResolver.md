# por resolver en codigo

## Consideraciones para la calificación por cumplir


- diseño con tailwind css
- mejorar renderizado de ini y fin (para arreglar footer y otras secciones importantes)


### admin

- Relacionar un maestro a un curso (o más, si gustas).
- Eliminar maestros no requiere que dicho maestro no tenga cursos asignados, se puede eliminar un maestro sin necesidad de dicha corroboración.
- Cambiar el rol de cada usuario (no se permite crear nuevos roles). validar si si tiene clases, que dependan de el o inscripciones si fuera alumno

- cuando se edite los permisos de usuario ¿que se debe hacer con maestros o alumnos que ya tengan clases asignadas?.

- habilitar los botones eliminar

- que aparesca el nombre de la clase, o nombre del alumno o maestro con la tabla actual que se este trabajando

- eliminar alumnos, maestros 

- agregar multi-seleccion a inscripcion de alumnos(ejemlo del profesor en clases)

- agregar asignacion de maestros clases

## Consideraciones OPCIONALES que suman puntos:


- Activar o desactivar a un usuario en el panel de administrador (quiere decir que si un usuario ha sido desactivado, no debería poder acceder con sus credenciales hasta que sea activado nuevamente).


- El admin puede ver la cantidad de alumnos inscritos en cada clase.
- Cada maestro puede Crear, Leer, Actualizar y Eliminar calificaciones y comentarios de sus alumnos.
- El alumno puede ver en la pestaña "Ver Calificaciones" un mensaje dejado por el maestro y la calificación de cada curso.

- Desarrollar toda la interfaz del usuario (UI) desde cero.

#### Alguna otra funcionalidad acorde a la lógica del negocio.

- Una maestro puede estar asignado a varias clases
- Eliminar maestros requiere que dicho maestro no tenga cursos asignados.
- Eliminar clases requiere que dicho clase no tenga alumnos inscritos.
- Eliminar alumno requiere que dicho alumno no tenga clases inscritas.


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


