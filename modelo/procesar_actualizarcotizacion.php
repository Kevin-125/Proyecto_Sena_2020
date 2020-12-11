<?php 
include("valido.php");

$id = $_POST['id'];
$nombrecliente = $_POST['nombre_cliente'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];

$actualizar = "UPDATE cotizacion SET nombre_cliente='$nombrecliente', descripcion='$descripcion', tipo='$tipo' WHERE id_cotizacion='$id'";

 $resultado=mysqli_query($conex, $actualizar);

 if ($resultado) {
     echo "<script>alert('se actualizo corretamente p\u00E1gina'); window.location='../vista/edicion_cotizacion.php';</script>";
 }
     else {
         echo "<script>alert ('no se actualizo'); window.history.go(-1);</script>";
     }
 
?>