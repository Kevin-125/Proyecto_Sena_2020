<?php 


include("../modelo/valido.php");

	    $nit = $_POST['nit'];
        $nombre_emp = $_POST['nombre_emp'];
        $nombre_resp = $_POST['nombre_resp'];
        $nombre_clie = $_POST['nombre_clie'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $tipo = $_POST['tipo'];
        $ingreso4 = $_POST['ingreso4'];
        $ingreso5 = $_POST['ingreso5'];
        $resultado1 = $_POST['resultado1'];
        date_default_timezone_set('America/Bogota');
        $fechareg = date("y/m/d");
     
	    $consulta = "INSERT INTO cotizacion ( fecha, nombre_cliente, email, nit_empresa, nombre_empresa, direccion, persona_resp, producto_cot, tipo, cantidad, descripcion, total, precio)
       VALUES ( '$fechareg','$nombre_clie', '$correo','$nit','$nombre_emp','$direccion','$nombre_resp','$producto','$tipo','$ingreso5','$descripcion','$resultado1','$ingreso4')"; 
      $resultado = mysqli_query($conex,$consulta);

      if ($resultado) {
        echo "<script>alert('se guardo corretamente p\u00E1gina'); window.location='../vista/modulo_cotizaciones.php';</script>";
    }
        else {
            echo "<script>alert ('no se guardo'); window.history.go(-1);</script>";
        }
    
   ?>