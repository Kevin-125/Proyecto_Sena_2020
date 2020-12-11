<?php
include("valido.php");

$id = $_GET["id_usuario"];

$eliminar = "DELETE FROM usuarios WHERE id_usuario = '$id'";
$resultadoEliminar = mysqli_query($conex, $eliminar);

if ($resultadoEliminar) {
    header("location: ../vista/edicion_user.php");
}
 
else {
    echo "<script>alert('no se elimino'); window.history.go(-1);</script>";
}