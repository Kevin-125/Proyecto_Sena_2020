<?php

include("../modelo/valido.php");

$id = $_POST['id'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

if ($clave1 == $clave2)
{

$actualizar = "UPDATE usuarios SET correo='$correo',
 clave='$clave1' WHERE id_usuario='$id'";

 $resultado=mysqli_query($conex, $actualizar);

     echo "<script>alert('se actualizo corretamente p\u00E1gina'); window.location='../vista/configuracion.php';</script>";
 }
     else {
         echo "<script>alert ('No coinden las contraseñas ingrasadas'); window.history.go(-1);</script>";
     }
    