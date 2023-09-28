#por resolver en codigo

-diseño con tailwind css
-cuando se edite los permisos de usuario que se debe hacer con maestros y alumnos que ya tengan clases asignadas.

-editar estado en permisos desde admin
-que hacer cuando el permiso

-habilitar los botones eliminar
-editar calificaciones y mensajes

-que paresca el nombre de la clase, o nombre del alumno o maestro con la tabla actual que se este trabajando



base de datos:
universidad_db

#TABLAS

#usuarios:

id_usuario(PK)
dni
email
contrasena
nombre
apellido
direccion
fecha_nac
estado(activo:si/no)
id_rol(FK)


#roles:
id_rol
descriccion(administrador(1), maestro(2), alumno(3))


#clase:
id_clase(PK)
nombre_clase
id_usuario_maestro(FK)


#incripciones
id_inscripcion(PK)
id_clase(FK)
id_usuario_alumno(FK)
nota_alumno
mensaje

#----------------
#CRUD

#Views
1) index.php---->>>> login


#Handle_db


#reinstalar paso 4  tailwind css
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch



