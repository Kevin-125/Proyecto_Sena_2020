
<?php

require("valido.php");

$sql="select count(id_usuario) from usuarios where rol_id=1";
$result=mysqli_query($conex,$sql);
$row=mysqli_fetch_array($result);
echo "Administradores = "."$row[0] <br>";

$sql="select count(id_usuario) from usuarios where rol_id=2";
$result=mysqli_query($conex,$sql);
$row=mysqli_fetch_array($result);
echo "Auxiliares = "."$row[0]";
mysqli_close($conex);

?>


    
