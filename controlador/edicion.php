<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>Edicion de Productos</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="Estilo/estiloedit.css">
    <form action="../controlador/procesar_actualizar.php" method="POST">
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
        <div class="container-fluid">
            <div class="page-header">
              <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administración <small>PRODUCTOS</small></h1>
            </div>
            <p class="lead">BIENVENIDO !</p>
        </div><!-- Panel listado de productos -->
        <div class="container-fluid">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; EDICIÓN DE PRODUCTOS</h3>
                </div>

        <div class="container-fluid">
            <ul class="breadcrumb breadcrumb-tabs">
                <li>
                    <a href="regproducto.html" class="btn btn-info">
                        <i class="zmdi zmdi-plus"></i> &nbsp; NUEVO PRODUCTO
                    </a>
                </li>
                <li>
                    <a href="listaprod.php" class="btn btn-success">
                        <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE PRODUCTOS
                    </a>
                </li>
            </ul>
        </div>
    <center>
    <div id="box">
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
                                                           </tr>
                            </thead>
                        </table>
                    </div>
        <br>
        
<?php

include "../modelo/con_db.php";

    $id_producto=$_GET['id_producto'];
    $sentencia="SELECT * FROM productos WHERE id_producto= '".$id_producto."'  ";
    $result=mysqli_query($conex,$sentencia);

    while ($most=mysqli_fetch_array($result)) {
        ?> 
        <input type="hidden" name="i" value="<?php echo $most['id_producto']?>"> 
    	<input type="text" name="n"  size="20" value="<?php echo $most['nombre']?>">  
    	<input type="text" name="c"  size="17" value="<?php echo $most['codigo'];?>"> 
    	<input type="text" name="u" size="15" value="<?php echo $most['unidades'];?>"> 
    	<input type="text" name="p" size="15" value="<?php echo $most['precio'];?>"> 
    	<input type="text" name="r"  size="22" value="<?php echo $most['referencia'];?>"> 
    	<input type="text"  name="t" placeholder="Producto/Servicio" size="15" value="Producto <?php echo $most['tipo'];?>"> 
        

        <?php 
    }
 
 ?> 
 <p class="text-center" style="margin-top: 20px;">
                            <button type="submit" name="guardar" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Actualizar</button>
                            <input type="reset" value="Limpiar" style="background:#81A7B4">
                        </p>
                    </div>
                </center>
            </form>

</div>
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
</center>
</div>
</body>
</html>
