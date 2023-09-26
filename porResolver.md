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

#----------------
#CRUD

#Views
1) index.php---->>>> login


#Handle_db


#reinstalar paso 4  tailwind css
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch



