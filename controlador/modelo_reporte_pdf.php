<?php 
	
include("../modelo/valido.php");

$total = 'SELECT SUM(valor_total) as total FROM recibos WHERE fecha_reg BETWEEN "'.$desde.'" AND "'.$hasta.'"';

$resultado = mysqli_query($conex,$total);
$fila = $resultado ->fetch_assoc();
$total2 = $fila['total'];


?>

<?php
	require_once '../modelo/accesoDB.php';
	date_default_timezone_set("America/Lima");
	
	function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
	}
	
	class adminDAO{
		
		public function allBitacora(){
			try{
				$pdo = AccesoDB::getConnectionPDO();
				
				$sql = 'SELECT * FROM recibos ORDER BY id_recibo DESC';
				
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				
				$return = $stmt->fetchAll();
				return $return;
				
			} catch (Exception $e){
				throw $e;
			}	
		}
		
		public function buscarAllBitacoraFecha($desde,$hasta){
			try{
				$pdo = AccesoDB::getConnectionPDO();
				
				$sql = 'SELECT * FROM recibos WHERE fecha_reg BETWEEN "'.$desde.'" AND "'.$hasta.'" ORDER BY id_recibo DESC';
				
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				
				$return = $stmt->fetchAll();
				return $return;
				
			} catch (Exception $e){
				throw $e;
			}	
		}
			
	}
	
	

?>