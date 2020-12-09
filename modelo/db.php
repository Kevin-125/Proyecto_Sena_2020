<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
.btn {
	font-size: 1.5rem;
}
.close {
    font-size: 2.2rem;
}
</style>



</head>
<body>
  
</body>
</html>
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


