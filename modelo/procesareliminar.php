<?php
include("valido.php");

$id = $_GET["id"];

$eliminar = "DELETE FROM recibos WHERE id_recibo = '$id'";
$resultadoEliminar = mysqli_query($conex, $eliminar);

if ($resultadoEliminar) {
    header("location: ../vista/edicion.php");
}
 
else {
    echo "<script>alert('no se elimino'); window.history.go(-1);</script>";
}