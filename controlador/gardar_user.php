<?php 


include("valido.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['ingreso5']) >= 1 && strlen($_POST['ingreso4']) >= 1  && strlen($_POST['ingreso1']) >= 1 && strlen($_POST['ingreso2']) >= 1
    && strlen($_POST['ingreso3']) >= 1 && strlen($_POST['ingreso6']) >= 1 && strlen($_POST['resultado1']) >= 1
    && strlen($_POST['resultado3']) >= 1 && strlen($_POST['resultado4']) >= 1 && strlen($_POST['resultado5']) >= 1)  {
	    $ingreso5 = trim($_POST['ingreso5']);
        $ingreso4 = trim($_POST['ingreso4']);
        $ingreso1 = trim($_POST['ingreso1']);
        $ingreso2 = trim($_POST['ingreso2']);
        $ingreso6 = trim($_POST['ingreso6']);
        $ingreso3 = trim($_POST['ingreso3']);
        $resultado1 = trim($_POST['resultado1']);
        $resultado3 = trim($_POST['resultado3']);
        $resultado4 = trim($_POST['resultado4']);
        $resultado5 = trim($_POST['resultado5']);
        date_default_timezone_set('America/Bogota');
        $fechareg = date("y/m/d");
     
	    $consulta = "INSERT INTO recibos ( cajero,nombre_cliente, producto, cantidad, precio, subtotal, iva, valor_total, cantidad_pagada, cantidad_debida, fecha_reg)
       VALUES ( '$ingreso3','$ingreso1', '$ingreso2','$ingreso4','$ingreso5','$resultado1','$resultado3','$resultado4','$ingreso6','$resultado5','$fechareg')"; 
      $stock = "UPDATE productos SET unidades = unidades - $ingreso4  WHERE codigo = $ingreso2";
      $resultado = mysqli_query($conex,$consulta);
      $resultado1 = mysqli_query($conex,$stock);

	    if ($resultado) {

        ?>

<div class="alert alert-success" role="alert">
  Recibo guardado
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

      <?php
            
	    } else {

        ?>

        <div class="alert alert-danger" role="alert">
          ¡Ups ha ocurrido un error!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
              <?php
	    
      } 
    }   else {   
      
      ?>

<div class="alert alert-danger" role="alert">
  ¡Por favor complete los campos!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

      <?php
	    
    }
  
}