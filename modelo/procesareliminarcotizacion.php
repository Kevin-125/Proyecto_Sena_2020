<?php
include("valido.php");

$id = $_GET["id_cotizacion"];

$eliminar = "DELETE FROM cotizacion WHERE id_cotizacion = '$id'";
$resultadoEliminar = mysqli_query($conex, $eliminar);

if ($resultadoEliminar) {
    header("location: ../vista/edicion_cotizacion.php");
}
 
else {
    echo "<script>alert('no se elimino'); window.history.go(-1);</script>";
}