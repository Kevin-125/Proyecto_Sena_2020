<!DOCTYPE html>
<html lang="es">
<head>
	<title>Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">

	<style>

.btn:not(.btn-raised).btn-success, .input-group-btn .btn:not(.btn-raised).btn-success {
    color: green;
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
							<a href="../vista/modulocotizacion.php"><i class="zmdi zmdi-assignment-o"></i> Cotizaciones</a>
						</li>
						<li>
							<a href="../vista/modulo_cotizaciones.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Productos</a>
						</li>
						<li>
							<a href="../vista/moduloreportes.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Reportes</a>
						</li>
						<li>
							<a href="../vista/moduloreportes.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Reportes</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						
						<li>
							<a href="cliente.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Usuarios</a>
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
		
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-assignment-o"></i> Cotización </h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>

		<div class="container-fluid">
			<ul class="breadcrumb breadcrumb-tabs">
			  	<li>
			  		<a href="client.html" class="btn btn-info">
			  			<i class="zmdi zmdi-plus"></i> &nbsp; NUEVA COTIZACIÓN
			  		</a>
			  	</li>
			  	<li>
			  		<a href="../vista/edicion_cotizacion.php" class="btn btn-success">
			  			<i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE COTIZACIÓN
			  		</a>
			  	</li>
			</ul>
		</div>

		<!-- Panel nuevo cliente -->
		<div class="container-fluid">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVA COTIZACIÓN</h3>
				</div>
				<div class="panel-body">
					<form name="calculadora" method="POST" action="../controlador/guardar_cotizacion.php">
                        <br>
                       
				    	<fieldset>
				    		<legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
				    		<div class="container-fluid">
				    			<div class="row">
				
                            
				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label"> Nit de la empresa *</label>
										  	<input class="form-control" type="number" name="nit" maxlength="70">
										</div>
				    				</div>

				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Nombre de la empresa</label>
										  	<input class="form-control" type="text" name="nombre_emp" maxlength="50">
										</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label"> Persona responsable</label>
										  	<input class="form-control" type="text" name="nombre_resp" required="" maxlength="70">
										</div>
				    				</div>

				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Nombre del cliente</label>
										  	<input class="form-control" type="text" name="nombre_clie" maxlength="50">
										</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Correo</label>
										  	<input class="form-control" type="email" name="correo" required="" maxlength="70">
										</div>
				    				</div>

				    				<div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Dirección</label>
										  	<input class="form-control" type="text" name="direccion" maxlength="50">
										</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
										<div class="form-group label-floating">
										  	<label class="control-label">Producto</label>
										  	<input class="form-control" type="number" name="producto" required="" maxlength="70">
										</div>
				    				</div>
                                    <div class="col-xs-12">
										<div class="form-group label-floating">
							<p>Descripcion: <textarea class="form-control" type="text" name="descripcion"></textarea></p>
							</div>
							</div>
				    				<div class="col-xs-12">
										<div class="form-group">
											<label class="control-label">Tipo de servicio</label>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="tipo" id="optionsRadios1" value="servicio" checked="">
													<i class="zmdi zmdi-male-alt"></i> &nbsp; Servicio
												</label>
											</div>
											<div class="radio radio-primary">
												<label>
													<input type="radio" name="tipo" id="optionsRadios2" value="producto">
													<i class="zmdi zmdi-female"></i> &nbsp; Producto
												</label>
                                            </div>

                                            <td><input type="text" name="ingreso4" placeholder="Precio" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

                                            <td><input type="text" name="ingreso5" placeholder="Cantidad" autocomplete="off" onKeyUp="Suma()" style="width: auto;"><br><br></td>

                                            <td><input type="text" name="resultado1"  onKeyUp="Suma()" autocomplete="off" readonly=»readonly»  style="width: auto;"><br><br></td>
										</div>
				    				</div>
				    			</div>
				    		</div>
				    	</fieldset>
					    <p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" name="register"  class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
					    </p>
				    </form>
				</div>
			</div>
		</div>
    <script>

	
//Función que realiza la suma
function Suma() {

   var ingreso5 = document.calculadora.ingreso5.value;
   var ingreso4 = document.calculadora.ingreso4.value;


   try{

      //Calculamos el número escrito:
  
       ingreso5 = (isNaN(parseInt(ingreso5)))? 0 : parseInt(ingreso5);
       ingreso4 = (isNaN(parseInt(ingreso4)))? 0 : parseInt(ingreso4);
     
       document.calculadora.resultado1.value = ingreso5*ingreso4;
 
            
   }
   //Si se produce un error no hacemos nada
   catch(e) {}
}
</script>
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