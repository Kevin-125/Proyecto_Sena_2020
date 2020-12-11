<?php 


include("../modelo/valido.php");

	    $ingreso5 = $_POST['usuario'];
        $ingreso4 = $_POST['clave'];
        $ingreso1 = $_POST['correo'];
        $ingreso2 = $_POST['id'];
     
	    $consulta = "INSERT INTO usuarios ( nombre_usuario, clave, correo, rol_id)
       VALUES ( '$ingreso5','$ingreso4', '$ingreso1','$ingreso2')"; 
      $resultado = mysqli_query($conex,$consulta);

    
      
	 

    