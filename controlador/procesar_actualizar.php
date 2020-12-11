<?php 

include "../modelo/con_db.php";

$id = $_POST['i'];
$nombre = $_POST['n'];
$codigo = $_POST['c'];
$unidades = $_POST['u'];
$precio = $_POST['p'];
$referencia = $_POST['r'];
$tipo = $_POST['t'];

//Actualizar

$actualizar = "UPDATE productos SET nombre='$nombre', codigo='$codigo', unidades='$unidades', precio='$precio', referencia='$referencia', tipo='$tipo' WHERE id_producto='$id' ";

$resultado=mysqli_query($conex,$actualizar);

if ($resultado) {
	echo "LISTO";
}

 ?>

 <script type="text/javascript">
 	alert("El producto se ha modificado exitosamente!");
 	window.location.href="../vista/listaprod.php";
 </script>