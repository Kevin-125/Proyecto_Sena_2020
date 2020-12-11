<?php 
include("valido.php");

$id = $_POST['id'];
$nombrecliente = $_POST['nombrecliente'];
$producto = $_POST['producto'];
$cantidaddebida = $_POST['cantidaddebida'];

$actualizar = "UPDATE recibos SET nombre_cliente='$nombrecliente', producto='$producto', cantidad_debida='$cantidaddebida' WHERE id_recibo='$id'";

 $resultado=mysqli_query($conex, $actualizar);

 if ($resultado) {
     echo "<script>alert('se actualizo corretamente p\u00E1gina'); window.location='../vista/edicion.php';</script>";
 }
     else {
         echo "<script>alert ('no se actualizo'); window.history.go(-1);</script>";
     }
 
?>