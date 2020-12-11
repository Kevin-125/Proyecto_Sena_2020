<!DOCTYPE html>
<html lang="es">
<head>
	<title> Listado de Productos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css"> 
    <form action="procesar_actualizar.php" method="GET"> 
    <style>
			.btn:not(.btn-raised).btn-success, .input-group-btn .btn:not(.btn-raised).btn-success {
    color: #4cb511;
}
		</style>
</head>
<body>
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
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					
					<li>
						<a href="configuracion.php" title="Mi cuenta">
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
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../vista/modulorecibo.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Recibo</a>
						</li>
						<li>
							<a href="../vista/modulo_cotizaciones.php"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Cotizacion</a>
						</li>
						<li>
							<a href="../vista/regproducto.html"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Productos</a>
						</li>
						<li>
							<a href="../vista/moduloreportes.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Reportes</a>
                        </li>
                        <li>
							<a href="../vista/backup.php"><i class="zmdi zmdi-cloud-download"></i> Backup</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					
						<li>
							<a href="client.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
						</li>
					</ul>
				</li>
				<li>
				
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
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administración <small>PRODUCTOS</small></h1>
			</div>
			<p class="lead">BIENVENIDO !</p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="../vista/regproducto.html" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVO PRODUCTO
			  		</a>
			  	</li>
			  	<li>
			  		<a href="../vista/listaprod.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PRODUCTOS
			  		</a>
			  	</li>
			</ul>
		</div>

		<!-- Panel listado de productos -->
		<div class="container-fluid">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PRODUCTOS</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<td class="text-center">NOMBRE</td>
									<td class="text-center">CÓDIGO</td>
									<td class="text-center">UNIDADES</td>
									<td class="text-center">PRECIO</td>
									<td class="text-center">DESCRIPCIÓN</td>
                                    <td class="text-center">TIPO</td> 
                                    <td class="text-center">OPERACIÓN</td>
                                </tr>
							
							</tbody>
						<form method="GET">

						<?php 

						include "../modelo/con_db.php";

                        $sentencia="SELECT * FROM productos";
                        $result=mysqli_query($conex,$sentencia);


                         while ($mostrar=mysqli_fetch_array($result)) {
                         ?>

						 <tr>
						 	<td> <?php echo $mostrar['nombre']?></td>
						 	<td> <?php echo $mostrar['codigo']?></td>
						 	<td> <?php echo $mostrar['unidades']?></td>
						 	<td> <?php echo $mostrar['precio']?></td>
						 	<td> <?php echo $mostrar['referencia']?></td>
						 	<td> <?php echo $mostrar['tipo']?></td>
						    <?php echo "<td> <a href='../controlador/edicion.php?id_producto=".$mostrar['id_producto']."'> <button type='button' style='background: #81A7B4'> Editar</button></a> </td>";

                             echo "<td> <a href='../controlador/eliminar.php?id_producto=".$mostrar['id_producto']."'>   
                            <input type='button' class='btn_eliminar' style='background: #C72121' value='Eliminar'></a> </td>";
                            
						 	 
						 		 
						 echo "</tr>";
						 ?>

						<?php  
                        }
                        ?>
						 </table>
                </font>
                </form>
					</div>
					<nav class="text-center">
						<ul class="pagination pagination-sm">
							<li class="disabled"><a href="javascript:void(0)">«</a></li>
							<li class="active"><a href="javascript:void(0)">1</a></li>
							<li><a href="javascript:void(0)">2</a></li>
							<li><a href="javascript:void(0)">3</a></li>
							<li><a href="javascript:void(0)">4</a></li>
							<li><a href="javascript:void(0)">5</a></li>
							<li><a href="javascript:void(0)">»</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
	</section>

	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
	
</body>
</html>