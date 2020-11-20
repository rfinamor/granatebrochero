<?php 
include("conexion.php");

$fechas = $_POST['fechas'];
$cabana = $_POST['cabana'];
	

$fechadiadesde= substr($fechas,3,2);
$fechamesdesde= substr($fechas,0,2);
$fechaanodesde= substr($fechas,6,4);

$fechadiahasta= substr($fechas,16,2);
$fechameshasta= substr($fechas,13,2);
$fechaanohasta= substr($fechas,19,4);


$fechaDesde = $fechaanodesde .'-' .$fechamesdesde .'-' .$fechadiadesde;
$fechaHasta = $fechaanohasta .'-' .$fechameshasta .'-' .$fechadiahasta;



$sql = "SELECT precio FROM precios where fecha1 <= '$fechaDesde' OR fecha2 >= '$fechaHasta' and cabana = $cabana order by fecha1 desc limit 1";
$resultado = mysqli_fetch_assoc(mysqli_query($conexion,$sql));

echo $resultado['precio'];







 ?>