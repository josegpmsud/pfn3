<?php
session_start();
echo $_SESSION['sesion']['email'];
echo $_SESSION['sesion']['nombre'];
echo $_SESSION['sesion']['apellido'];
echo $_SESSION['sesion']['id_rol'];


?>