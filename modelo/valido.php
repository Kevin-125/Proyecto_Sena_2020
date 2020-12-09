<?php
// realizar conexion primero el nombre del servidor, usuario, contraseña y nombre de la base de datos//
$conex = mysqli_connect("localhost","root","","database"); 
// ejecutar la setencia//
mysqli_set_charset($conex, "utf");

?>