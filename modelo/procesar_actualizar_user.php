<?php 
include("valido.php");

$id = $_POST['id'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];

$actualizar = "UPDATE usuarios SET clave='$clave', rol_id='$rol', correo='$correo' WHERE id_usuario='$id'";

 $resultado=mysqli_query($conex, $actualizar);

 if ($resultado) {
     echo "<script>alert('se actualizo corretamente p\u00E1gina'); window.location='../vista/edicion_user.php';</script>";
 }
     else {
         echo "<script>alert ('no se actualizo'); window.history.go(-1);</script>";
     }
 
?>