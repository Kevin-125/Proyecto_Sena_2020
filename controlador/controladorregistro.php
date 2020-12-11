<?php
//verificacion de conexion con la base de datos... 

include("../modelo/con_db.php");

if (!$conex) {
    echo "Ha ocurrido un error";
}else{
	echo ".";
}

if (isset($_POST['guardar'])) {
if (strlen($_POST['nombre']) >=1 && 
	strlen($_POST['codigo']) >=1 && 
	strlen($_POST['unidades']) >=1 && 
	strlen($_POST['precio']) >=1 && 
	strlen($_POST['referencia']) >=1 && 
	strlen($_POST['tipo']) >=1) {

//se reciben los datos del formulario para almacenarlos en variables(encapsulacion)...
	$nombre = trim ($_POST['nombre']);
	$codigo = trim($_POST['codigo']);
	$unidades = trim($_POST['unidades']); 
	$precio = trim($_POST['precio']);
	$referencia = trim($_POST['referencia']);
	$tipo = trim($_POST['tipo']);
	
//se realiza la consulta para insertar los datos ...
	$consulta = "INSERT INTO productos (nombre, codigo, unidades, precio, referencia, tipo) 
	VALUES ('$nombre','$codigo','$unidades','$precio','$referencia','$tipo')" ;

    
	$resultado=mysqli_query($conex,$consulta);
	if ($resultado) {   
		?>

<?php 
	}else{
		
		echo "<h3>Ups ha ocurrido un error!</h3>" ;
		
	}
} else {
	
	echo "<h3>Por favor complete los campos!</h3>" ;
	
}
}
?>
<script type="text/javascript">
	alert("Producto Registrado Exitosamente!");
	window.location.href='../vista/regproducto.html';
</script>


