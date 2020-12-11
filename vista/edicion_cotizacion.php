<?php
include("../modelo/valido.php");
$usuarios = "SELECT * FROM cotizacion"
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Usuarios</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../estilos/estilos.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	    <!-- BOOTSTRAP -->

	
	<style>
	
	.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    background-color: #000;
}

div.dataTables_wrapper div.dataTables_filter label {
    font-weight: normal;
    white-space: nowrap;
    text-align: right;
}

div.dataTables_wrapper div.dataTables_paginate ul.pagination {
margin: 50px 0;
white-space: nowrap;
justify-content: flex-end;
}

div.dataTables_wrapper div.dataTables_info {
    padding-top: 4.40em;
    white-space: nowrap;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.5rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
}

.btn:not(.btn-raised).btn-danger, .input-group-btn .btn:not(.btn-raised).btn-danger {
    color: #fff;
}

label {
    display: inherit;
    margin-bottom: 0.5rem;
}

.form-control-sm {
    	height: calc(1.8rem + 20px);
    	padding: .15rem -0.8rem;
    	font-size: 1rem;
    	line-height: 2.5;
    	border-radius: 0.5rem;
	}

</style>

</head>

<script type="text/javascript">

function confirmar()
{
	var respuesta = confirm("¿Seguro que deseas eliminarlo?");

	if (respuesta == true)
	{
		return true;
	}
	else{
		return false;
	}
}

</script>

<body>

<font size=3>

<DIV ALIGN=left>
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
							<a href="../vista/modulo_cotizaciones.php"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Cotizacion</a>
						</li>
						<li>
							<a href="../vista/modulo_cotizaciones.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Productos</a>
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
							<a href="cliente.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Usuarios</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	</DIV>
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
	
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>

	<section>

	<div class="container" style="margin-top: 25px; padding: 10px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Fecha</th>
            <th>Nombre Cliente</th>
            <th>Descripcion </th>
			<th>Tipo </th>
			<th>Operación</th>
        </thead>
        <tbody>

		<?php
        $resultado= mysqli_query($conex,$usuarios); 
        while($row= mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["fecha"];?></td>
                <td><?php echo $row["nombre_cliente"];?></td>
                <td><?php echo $row["descripcion"];?></td>
                <td><?php echo $row["tipo"];?></td>
				<td>
        <a href="../vista/actualizar_cotizacion.php? id_cotizacion=<?php echo $row["id_cotizacion"];?>" class="btn btn-primary">Editar</a> |
		<a href="../modelo/procesareliminarcotizacion.php? id_cotizacion=<?php echo $row["id_cotizacion"];?>" class="btn btn-danger" onclick="return confirmar()">Eliminar</a>
		<?php } mysqli_free_result($resultado);?>

		</td>	
            </tr>


	 <!-- JQUERY -->
	 <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
	</script>
	
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "TODOS"] ],
            });
        });
    </script>

    </section>

</body>
</html>