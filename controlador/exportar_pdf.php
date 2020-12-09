<?php

if(strlen($_POST['desde'])>0 and strlen($_POST['hasta'])>0){
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];

	$verDesde = date('d/m/Y', strtotime($desde));
	$verHasta = date('d/m/Y', strtotime($hasta));
}else{
	$desde = '1111-01-01';
	$hasta = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}

error_reporting(E_ALL ^ E_NOTICE);
require_once '../controlador/modelo_reporte_pdf.php';

$impr = new adminDAO();

require_once('../tcpdf/tcpdf.php');


	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);

	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(TRUE);
	$pdf->SetMargins(20, 10, 20, 20); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();



$datos = $impr->buscarAllBitacoraFecha($desde,$hasta);
 

$content = '';

	$content .= '
		<div class="row">
		
        	<div class="col-md-12">
			
				<h1 style="text-align:center;">Reporte: Datos de Recibos</h1>
            	<h3 style="text-align:center;">Desde '.$verDesde.' hasta: '.$verHasta.'</h3>
				<h1 style="text-align:left;">Total: $ 'echo "hola" .$total2.'</h1>

      <table border="1" cellpadding="5">
        <thead>
          <tr bgcolor="#E5E5E5">
            <th width="10%">Nº</th>
            <th width="20%">Fecha</th>
            <th width="20%">Producto</th>
			<th width="30%">Cantidad</th>
			<th width="20%">Subtotal</th>
          </tr>
        </thead>
	';

	for($x=0; $x<count($datos); $x++){
	$x; $l = $x+1;
	$fecha = fechaNormal($datos[$x]['fecha_reg']);
	$nombre_producto = $datos[$x]['producto'];
	$cantidad = $datos[$x]['cantidad'];
	$valor_total = $datos[$x]['valor_total'];


	$content .= '
		<tr nobr="true" bgcolor="#f5f5f5">
            <td width="10%">'.$l.'</td>
            <td width="20%">'.$fecha.'</td>
            <td width="20%">'.$nombre_producto.'</td>
			<td width="30%">'.$cantidad.'</td>
			<td width="20%">$ '.$valor_total.'</td>
        </tr>
	';
	}

	$content .= '</table>';


//CONSULTA

$pdf->writeHTML($content, true, 0, true, 0);

$pdf->lastPage();

$pdf->output('../temp/reporte.pdf', 'I');
?>