<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "root", "", "database");
$consulta="SELECT * FROM usuarios WHERE nombre_usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {

	header('Location: ../vista/home.html');

	mysqli_free_result($resultado);
	mysql_close($conexion);

}

else {

	       ?> 
          
          <h3 class="bad">Error en la autentificacion</h3>

           <?php  
}

?>


