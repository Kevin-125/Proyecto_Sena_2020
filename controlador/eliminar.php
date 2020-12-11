<?php 

include "../modelo/con_db.php";

$id = $_GET['id_producto'];
$eliminar = "DELETE FROM productos WHERE id_producto='".$id."' ";

mysqli_query($conex,$eliminar);

 ?>
 <script type="text/javascript">
 	alert("El producto se ha eliminado exitosamente!");
 	window.location.href="../vista/listaprod.php";
 </script>