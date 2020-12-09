<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Recibos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Bootstrap Y JQuery -->
<link href="../css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="../css/jquery/dist/jquery.min.js"></script>
<script src="../css/pdf_object/pdfobject.js"></script>

<style>
.pdfobject-container { height: 60rem; border: 1rem solid rgba(0,0,0,.1); }
.modal-dialog{background-color: #fff; padding: 20px 15px;}
#cancel{margin: 5px; display: block;}
.cargando{position: absolute;width: 30px;right: -40px;top: -2px;}
.hide{display: none;}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    background-color: #000;
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
							<a href="../vista/moduloreportes.php"><i class="zmdi zmdi-assignment-o"></i>  Reportes</a>
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

<div class="container">
	<div class="row">
		<div class="slide_uno col-md-12 col-sm-12 col-xs-12">
			<h2 class="text-center">Exportar Datos a PDF</h2>
			<div class="clearfix"></div>
			<table class="table table-striped table-bordered">
				<div class="row">
					<div class="col-sm-12">
						<div id="datatable_length">
							<!-- RANGO DE FECHAS A BUSCAR Y EXPORTAR -->
							<label style="font-weight: normal;">Desde: <input class="form-control" type="date" id="bd-desde"/></label>
							<label style="font-weight: normal;">Hasta: <input class="form-control" type="date" id="bd-hasta"/></label>
							<button id="rango_fecha" class="btn-sm btn-primary">Buscar</button>
							<!-- BOTON PARA EXPORTAR EL RANGO DE FECHAS -->
							<a onClick="javascript:reportePDF();" class="btn-sm btn-danger" style="padding: 8px 15px; cursor: pointer; position: relative;">Exportar PDF<span><img src="../cargando.gif" class="cargando hide"></span></a>
						</div>
					</div>
				</div>
				<div class="row">
					<thead>
					<tr>
						<th width="10">N°</th>
						<th width="30">Fecha</th>
						<th width="20">Producto</th>
						<th width="20">Cantidad</th>
						<th width="20">Valor Total</th>
					</tr>
					</thead>
					<!-- CONTENEDOR DONDE SE IMPRIMEN LA CONSULTA POR FECHAS -->
					<tbody id="actualizar">
						<?php include('../controlador/imprimir_datos.php'); ?>
					</tbody>
				</div>
			</table>
		</div>
	</div>
</div>
<center>
<div class="modal fade" id="ver-pdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="x_panel">
		<div class="x_title">
			<h2 class="text-center">Reporte Generado</h2>
			<div class="clearfix"></div>
		</div>

		 <div id="view_pdf"></div>
			<a id="cancel" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Cancelar</a>
		</div>
	</div>
</div>
	
<script type="text/javascript">
(function(){	
	$('#rango_fecha').on('click',function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../controlador/busca_por_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#actualizar').html(datos);
		}
	});
	return false;
	});
})();
	
function reportePDF(){
	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	var url = '../controlador/exportar_pdf.php';
	$('.cargando').removeClass('hide');
	$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('.cargando').addClass('hide');
			$('#ver-pdf').modal({
				show:true,
				backdrop:'static'
			});	
			PDFObject.embed("../temp/reporte.pdf", "#view_pdf");
		}
	});
	return false;
}


</script>
	
<!-- Bootstrap -->
<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>


	<section>

	</section>

</body>
</html>