<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Recibos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	
<style>


.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;

}


hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 2px solid #19bce0;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: orange;
}

thead{
	background-color: #5bbad4;
    padding: 20px;
    margin: 20px;
    border-bottom: solid 5px #307594;
    color: white;
}

</style>
</head>
<body>
<font size=3>

	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Elementhal Trades <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../assets/avatars/AdminMaleAvatar.png" alt="UserIcon">
					<figcaption class="text-center text-titles"><?php echo $_SESSION['']; ?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="my-data.html" title="Mis datos">
							<i class="zmdi zmdi-account-circle"></i>
						</a>
					</li>
					<li>
						<a href="my-account.html" title="Mi cuenta">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../vista/modulorecibo.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Recibos</a>
						</li>
						<li>
							<a href="category.html"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Cotizacion</a>
						</li>
						<li>
							<a href="provider.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Productos</a>
						</li>
						<li>
							<a href="book.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Reportes</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="admin.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="search.html" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
			</ul>
		</nav>
	</font>	
	<font size=2>
		<!-- Content page -->

		<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<section>
<script>

	
//Función que realiza la suma
function Suma() {

   var ingreso5 = document.calculadora.ingreso5.value;
   var ingreso4 = document.calculadora.ingreso4.value;
   var ingreso6 = document.calculadora.ingreso6.value;

   try{

      //Calculamos el número escrito:
  
       ingreso5 = (isNaN(parseInt(ingreso5)))? 0 : parseInt(ingreso5);
       ingreso4 = (isNaN(parseInt(ingreso4)))? 0 : parseInt(ingreso4);
       ingreso6 = (isNaN(parseInt(ingreso6)))? 0 : parseInt(ingreso6);
       document.calculadora.resultado1.value = ingreso5*ingreso4;
       document.calculadora.resultado3.value = ingreso5*ingreso4*0.19;
       document.calculadora.resultado4.value = ingreso5*ingreso4*0.19+ingreso5*ingreso4;
       document.calculadora.resultado5.value = ingreso5*ingreso4*0.19+ingreso5*ingreso4-ingreso6;
            
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}


</script>

<a href="../vista/moduloreciboedicion.php" class="btn btn-primary">VER RECIBOS</a>
<center>
<h1><b>Recibo de Caja</b></h1>


<table class="table-responsive-md">
<form name="calculadora" method="POST">  

  <thead>

    <tr>

    <th>Nombre Cajero </th> 
    <th>Nombre del cliente</th>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Subtotal</th>
    <th>

    </tr>

  </thead>

  <tbody>

  <tbody>

<tr>

<?php 
      include("../modelo/db.php");
      ?>
  


  <td><input type="text" name="ingreso3" placeholder="Cajero" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

  <td><input type="text" name="ingreso1" placeholder="Nombre cliente" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

  <td><input type="text" name="ingreso2" placeholder="Producto" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

  <td><input type="text" name="ingreso4" placeholder="Cantidad" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

  <td><input type="text" name="ingreso5" placeholder="Precio" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

  <td><input type="text" name="resultado1"  onKeyUp="Suma()" autocomplete="off" readonly=»readonly»  style="width: auto;"><br><br></td>
  
 

</tr>

<p>
<hr>
<p>

<tr>

<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Iva</th>
<th>
    
<tr>

  

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td><input type="text" name="resultado3"  onKeyUp="Suma()" readonly=»readonly» style="width: auto;"><br><br></td>

  
 

</tr>

<tr>

<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Total</th>
<th>
    
<tr>

  

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td><input type="text" name="resultado4"  onKeyUp="Suma()" readonly=»readonly» style="width: auto;"><br><br></td>

  <td></td>
 

</tr>

<tr>

<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Cantidad pagada</th>
<th>
    
<tr>

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td><input type="text" name="ingreso6" placeholder="" onKeyUp="Suma()" autocomplete="off" style="width: auto;"><br><br></td>

  <td></td>
 

</tr>

<tr>

<th></th>
<th></th>
<th></th>
<th></th>
<th></th>
<th>Saldo</th>
<th>
    
<tr>

  <td><input type="submit" name="register" class="btn btn-success btn-lg" value="Guardar Recibo" href=""><i class="bi bi-bookmark-plus"> </i></td>

  <td></td>

  <td></td>

  <td></td>

  <td></td>

  <td><input type="text" name="resultado5"  onKeyUp="Suma()" readonly=»readonly» style="width: auto;"><br><br></td>

  <td></td>
 
</tr>

</tbody>

</table>


</form>


	</section>

</body>
</html>