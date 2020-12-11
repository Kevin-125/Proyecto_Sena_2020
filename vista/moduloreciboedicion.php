<?php
session_start();
?>
<?php
include("../modelo/valido.php");
$usuarios = "SELECT * FROM recibos"
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Recibos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
	    <!-- DATATABLES -->
    <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	
	
    <style>
		
        th,td {
            padding: 0.4rem !important;
        }
        body>div {
            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
		}
		
		.form-control-sm {
    	height: calc(2.8rem + 12px);
    	padding: .15rem -0.8rem;
    	font-size: 1.5rem;
    	line-height: 2.5;
    	border-radius: 0.5rem;
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
	

	

	<a href="../vista/modulorecibo.php" style="font-size: 1.5rem" class="btn btn-primary">CREAR RECIBO </a>
	<a href="../vista/edicion.php" style="font-size: 1.5rem" class="btn btn-success">EDITAR DATOS</a>
    

	<div class="container" style="margin-top: 25px;padding: 10px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>Id</th>
            <th>Nombre Cliente</th>
            <th>Producto </th>
			<th>Saldo </th>
			<th>Fecha Y/M/D </th>
        </thead>
        <tbody>
		<?php
        $resultado= mysqli_query($conex,$usuarios); 
        while($row= mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $row["id_recibo"];?></td>
                <td><?php echo $row["nombre_cliente"];?></td>
                <td><?php echo $row["producto"];?></td>
				<td><?php echo $row["cantidad_debida"];?></td>
				<td><?php echo $row["fecha_reg"];?></td>
				<?php } mysqli_free_result($resultado);?>
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

